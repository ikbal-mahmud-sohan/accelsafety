<?php

namespace App\Http\Controllers;

use App\Http\Resources\SafetyObservationOwnerDepartmentResource;
use App\Http\Resources\SafetyObservationPlantNameResource;
use App\Http\Resources\SafetyObservationRespDepartmentResource;
use App\Models\SafetyObservationOwnerDepartment;
use App\Models\SafetyObservationPlantName;
use App\Models\SafetyObservationRespDepartment;
use Illuminate\Http\Request;

class safetyDropDownController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $OwnerDepartment = SafetyObservationOwnerDepartmentResource::collection(SafetyObservationOwnerDepartment::all());
        $RespDepartment = SafetyObservationRespDepartmentResource::collection(SafetyObservationRespDepartment::all());
        $PlantName = SafetyObservationPlantNameResource::collection(SafetyObservationPlantName::all());
        return response()->json([
            'OwnerDepartment' => $OwnerDepartment,
            'RespDepartment' => $RespDepartment,
            'PlantName' => $PlantName,
        ]); 
    }
}
