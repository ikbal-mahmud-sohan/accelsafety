<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCircularSawRequest;
use App\Http\Resources\CircularSawResource;
use App\Models\CircularSaw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CircularSawController extends Controller
{
   
    public function index()
    {
        $circularSaw = CircularSawResource::collection(CircularSaw::all());
        $total = $circularSaw->count();
        return response()->json([
            'data' => $circularSaw,
            'total' => $total
        ]);
    }

    public function store(StoreCircularSawRequest $request)
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

        $circularSaw = CircularSaw::create($validatedData);
        return new CircularSawResource($circularSaw);
    }

    /**
     * Display the specified resource.
     */
    public function show(CircularSaw $circularSaw)
    {
        return CircularSawResource::make($circularSaw);
        
    }

    public function destroy(CircularSaw $circularSaw)
    {
        $circularSaw->delete();
        $circularSaw = CircularSawResource::collection(CircularSaw::all());
        $total = $circularSaw->count();
        return response()->json([
            'data' => $circularSaw,
            'total' => $total
        ]);
    }
}
