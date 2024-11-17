<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransitMixerRequest;
use App\Http\Resources\TransitMixerResource;
use App\Models\TransitMixer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TransitMixerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transitMixer = TransitMixerResource::collection(TransitMixer::all());
        $total = $transitMixer->count();
        return response()->json([
            'data' => $transitMixer,
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
    public function store(StoreTransitMixerRequest $request)
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

        $transitMixer = TransitMixer::create($validatedData);
        return new TransitMixerResource($transitMixer);
    }

    /**
     * Display the specified resource.
     */
    public function show(TransitMixer $transitMixer)
    {
        return TransitMixerResource::make($transitMixer);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TransitMixer $transitMixer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TransitMixer $transitMixer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransitMixer $transitMixer)
    {
        $transitMixer->delete();
        $transitMixer = TransitMixerResource::collection(TransitMixer::all());
        $total = $transitMixer->count();
        return response()->json([
            'data' => $transitMixer,
            'total' => $total
        ]);
    }
}
