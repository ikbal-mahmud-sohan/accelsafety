<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAirCompressorRequest;
use App\Http\Resources\AirCompressorResource;
use App\Models\AirCompressor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AirCompressorController extends Controller
{
    public function index()
    {
        $airCompressor = AirCompressorResource::collection(AirCompressor::all());
        $total = $airCompressor->count();
        return response()->json([
            'data' => $airCompressor,
            'total' => $total
        ]);
    }

    public function store(StoreAirCompressorRequest $request)
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

        $airCompressor = AirCompressor::create($validatedData);
        return new AirCompressorResource($airCompressor);
    }

    /**
     * Display the specified resource.
     */
    public function show(AirCompressor $airCompressor)
    {
        return AirCompressorResource::make($airCompressor);
        
    }

    public function destroy(AirCompressor $airCompressor)
    {
        $airCompressor->delete();
        $airCompressor = AirCompressorResource::collection(AirCompressor::all());
        $total = $airCompressor->count();
        return response()->json([
            'data' => $airCompressor,
            'total' => $total
        ]);
    }
}
