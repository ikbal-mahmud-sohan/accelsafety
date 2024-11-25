<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGasCuttingSetRequest;
use App\Http\Resources\GasCuttingSetResource;
use App\Models\GasCuttingSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class GasCuttingSetController extends Controller
{
    public function index()
    {
        $gasCuttingSet = GasCuttingSetResource::collection(GasCuttingSet::all());
        $total = $gasCuttingSet->count();
        return response()->json([
            'data' => $gasCuttingSet,
            'total' => $total
        ]);
    }

    public function store(StoreGasCuttingSetRequest $request)
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

        $gasCuttingSet = GasCuttingSet::create($validatedData);
        return new GasCuttingSetResource($gasCuttingSet);
    }

    public function show(GasCuttingSet $gasCuttingSet)
    {
        return GasCuttingSetResource::make($gasCuttingSet);
        
    }

    public function destroy(GasCuttingSet $gasCuttingSet)
    {
        $gasCuttingSet->delete();
        $gasCuttingSet = GasCuttingSetResource::collection(GasCuttingSet::all());
        $total = $gasCuttingSet->count();
        return response()->json([
            'data' => $gasCuttingSet,
            'total' => $total
        ]);
    }
}
