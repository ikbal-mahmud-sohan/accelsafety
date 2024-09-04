<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSafetyObservationRespDepartmentRequest;
use App\Http\Resources\SafetyObservationRespDepartmentResource;
use App\Models\SafetyObservationRespDepartment;

class SafetyObservationRespDepartmentController extends Controller
{
    public function index()
    {
        $safetyObservationPlantName = SafetyObservationRespDepartmentResource::collection(SafetyObservationRespDepartment::all());
        $totlCount = $safetyObservationPlantName->count();
        return response()->json([
            'data' => $safetyObservationPlantName,
            'total' => $totlCount,
        ]); 
    }

    public function store(StoreSafetyObservationRespDepartmentRequest $request)
    {
        $safetyObservationPlantName = SafetyObservationRespDepartment::create($request->validated());
        SafetyObservationRespDepartmentResource::make($safetyObservationPlantName);
        $safetyObservationPlantName = SafetyObservationRespDepartmentResource::collection(SafetyObservationRespDepartment::all());
        $totlCount = $safetyObservationPlantName->count();
        return response()->json([
            'data' => $safetyObservationPlantName,
            'total' => $totlCount,
        ]); 
    }

    public function destroy(SafetyObservationRespDepartment $safetyObservationRespDepartment)
    {
        $safetyObservationRespDepartment->delete();
        $safetyObservationRespDepartments = SafetyObservationRespDepartmentResource::collection(SafetyObservationRespDepartment::all());
        $totalCount = $safetyObservationRespDepartments->count();

        return response()->json([
            'data' => $safetyObservationRespDepartments,
            'total_count' => $totalCount,
        ]);
    }
}
