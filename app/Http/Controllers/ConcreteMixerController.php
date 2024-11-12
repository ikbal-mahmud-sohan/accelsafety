<?php

namespace App\Http\Controllers;

use App\Http\Resources\ConcreteMixerResource;
use App\Models\ConcreteMixer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ConcreteMixerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $concreteMixer = ConcreteMixerResource::collection(ConcreteMixer::all());
        $total = $concreteMixer->count();
        return response()->json([
            'data' => $concreteMixer,
            'total' => $total
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $checkedBySignature = [];
        if ($request->hasFile('checked_by_signature')) {
            foreach ($request->file('checked_by_signature') as $image) {
                $path = $image->store('checked_by_signature', 'public');
                $checkedBySignature[] = Storage::url($path);
            }
        }
        $reviewedSignatureUrls = [];
        if ($request->hasFile('reviewed_by_signature')) {
            foreach ($request->file('reviewed_by_signature') as $image) {
                $path = $image->store('reviewed_by_signature', 'public');
                $reviewedSignatureUrls[] = Storage::url($path);
            }
        }

        $validatedData = $request->validated();
        $validatedData['checked_by_signature'] = $checkedBySignature; 
        $validatedData['reviewed_by_signature'] = $reviewedSignatureUrls;

        $concreteMixer = ConcreteMixer::create($validatedData);
        return new ConcreteMixerResource($concreteMixer);
    }

    /**
     * Display the specified resource.
     */
    public function show(ConcreteMixer $concreteMixer)
    {
        return ConcreteMixerResource::make($concreteMixer);
        
    }

    public function destroy(ConcreteMixer $concreteMixer)
    {
        $concreteMixer->delete();
        $concreteMixer = ConcreteMixerResource::collection(ConcreteMixer::all());
        $total = $concreteMixer->count();
        return response()->json([
            'data' => $concreteMixer,
            'total' => $total
        ]);
    }
}
