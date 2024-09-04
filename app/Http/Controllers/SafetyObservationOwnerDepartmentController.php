<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSafetyObservationOwnerDepartmentRequest;
use App\Http\Resources\SafetyObservationOwnerDepartmentResource;
use App\Models\SafetyObservationOwnerDepartment;

class SafetyObservationOwnerDepartmentController extends Controller
{
    
    public function index()
    {
        $safetyObservationOwnerDepartment = SafetyObservationOwnerDepartmentResource::collection(SafetyObservationOwnerDepartment::all());
        $totlCount = $safetyObservationOwnerDepartment->count();
        return response()->json([
            'data' => $safetyObservationOwnerDepartment,
            'total' => $totlCount,
        ]); 
    }

    public function store(StoreSafetyObservationOwnerDepartmentRequest $request)
    {
        $safetyObservationOwnerDepartment = SafetyObservationOwnerDepartment::create($request->validated());
        SafetyObservationOwnerDepartmentResource::make($safetyObservationOwnerDepartment);
        $safetyObservationOwnerDepartment = SafetyObservationOwnerDepartmentResource::collection(SafetyObservationOwnerDepartment::all());
        $totlCount = $safetyObservationOwnerDepartment->count();
        return response()->json([
            'data' => $safetyObservationOwnerDepartment,
            'total' => $totlCount,
        ]); 
    }

    public function destroy(SafetyObservationOwnerDepartment $safetyObservationOwnerDepartment)
    {
        $safetyObservationOwnerDepartment->delete();
        $safetyObservationOwnerDepartments = SafetyObservationOwnerDepartmentResource::collection(SafetyObservationOwnerDepartment::all());
        $totalCount = $safetyObservationOwnerDepartments->count();

        return response()->json([
            'data' => $safetyObservationOwnerDepartments,
            'total_count' => $totalCount,
        ]);
    }
}
