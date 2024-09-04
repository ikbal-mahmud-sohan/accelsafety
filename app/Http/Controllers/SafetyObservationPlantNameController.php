<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSafetyObservationPlantNameRequest;
use App\Http\Resources\SafetyObservationPlantNameResource;
use App\Models\SafetyObservationPlantName;

class SafetyObservationPlantNameController extends Controller
{
    public function index()
    {
        $safetyObservationPlantName = SafetyObservationPlantNameResource::collection(SafetyObservationPlantName::all());
        $totlCount = $safetyObservationPlantName->count();
        return response()->json([
            'data' => $safetyObservationPlantName,
            'total' => $totlCount,
        ]); 
    }

    public function store(StoreSafetyObservationPlantNameRequest $request)
    {
        $safetyObservationOwnerDepartment = SafetyObservationPlantName::create($request->validated());
        SafetyObservationPlantNameResource::make($safetyObservationOwnerDepartment);
        $safetyObservationOwnerDepartment = SafetyObservationPlantNameResource::collection(SafetyObservationPlantName::all());
        $totlCount = $safetyObservationOwnerDepartment->count();
        return response()->json([
            'data' => $safetyObservationOwnerDepartment,
            'total' => $totlCount,
        ]); 
    }

    public function destroy(SafetyObservationPlantName $safetyObservationPlantName)
    {
        $safetyObservationPlantName->delete();
        $safetyObservationPlantNames = SafetyObservationPlantNameResource::collection(SafetyObservationPlantName::all());
        $totalCount = $safetyObservationPlantNames->count();

        return response()->json([
            'data' => $safetyObservationPlantNames,
            'total_count' => $totalCount,
        ]);
    }
}
