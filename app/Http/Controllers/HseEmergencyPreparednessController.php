<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseEmergencyPreparednessRequest;
use App\Http\Requests\StoreHseEmergencyPreparednessRequest;
use App\Http\Requests\UpdateHseEmergencyPreparednessRequest;
use App\Http\Resources\HseEmergencyPreparednessResource;
use App\Models\HseEmergencyPreparedness;
use Illuminate\Http\Request;

class HseEmergencyPreparednessController extends Controller
{
    public function index()
    {
        $hseEmergencyPreparedness = HseEmergencyPreparedness::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseEmergencyPreparednessResource::collection($hseEmergencyPreparedness);
    }

    public function store(StoreHseEmergencyPreparednessRequest $request)
    {
        $hseEmergencyPreparedness = HseEmergencyPreparedness::create($request->validated());
        return new HseEmergencyPreparednessResource($hseEmergencyPreparedness);
    }

    public function show(HseEmergencyPreparedness $hseEmergencyPreparedness)
    {
        return HseEmergencyPreparednessResource::make($hseEmergencyPreparedness);
        
    }

    public function edit(ApprovedHseEmergencyPreparednessRequest $request, HseEmergencyPreparedness $hseEmergencyPreparedness)
    {
        $hseEmergencyPreparedness->approved_by = $request->approved_by;
        $hseEmergencyPreparedness->approved_date = now();
        $hseEmergencyPreparedness->save(); 

        return new HseEmergencyPreparednessResource($hseEmergencyPreparedness);
    }

    public function update(UpdateHseEmergencyPreparednessRequest $request, HseEmergencyPreparedness $hseEmergencyPreparedness)
    {
        $hseEmergencyPreparedness->update($request->validated());
        return new HseEmergencyPreparednessResource($hseEmergencyPreparedness);
    }

   
    public function destroy(HseEmergencyPreparedness $hseEmergencyPreparedness)
    {
        $hseEmergencyPreparedness->delete();
        $hseEmergencyPreparedness = HseEmergencyPreparednessResource::collection(HseEmergencyPreparedness::all());
        $totalCount = $hseEmergencyPreparedness->count();

        return response()->json([
            'data' => $hseEmergencyPreparedness,
            'total_count' => $totalCount,
        ]);
    }
}
