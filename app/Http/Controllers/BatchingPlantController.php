<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBatchingPlantRequest;
use App\Http\Resources\BatchingPlantResource;
use App\Models\BatchingPlant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BatchingPlantController extends Controller
{
    public function index()
    {
        $batchingPlant = BatchingPlantResource::collection(BatchingPlant::all());
        $total = $batchingPlant->count();
        return response()->json([
            'data' => $batchingPlant,
            'total' => $total
        ]);
    }

    public function store(StoreBatchingPlantRequest $request)
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

        $batchingPlant = BatchingPlant::create($validatedData);
        return new BatchingPlantResource($batchingPlant);
    }

    /**
     * Display the specified resource.
     */
    public function show(BatchingPlant $batchingPlant)
    {
        return BatchingPlantResource::make($batchingPlant);
        
    }

    public function destroy(BatchingPlant $batchingPlant)
    {
        $batchingPlant->delete();
        $batchingPlant = BatchingPlantResource::collection(BatchingPlant::all());
        $total = $batchingPlant->count();
        return response()->json([
            'data' => $batchingPlant,
            'total' => $total
        ]);
    }
}
