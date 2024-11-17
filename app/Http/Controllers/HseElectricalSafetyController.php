<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseElectricalSafetyRequest;
use App\Http\Requests\StoreHseElectricalSafetyRequest;
use App\Http\Requests\UpdateHseElectricalSafetyRequest;
use App\Http\Resources\HseElectricalSafetyResource;
use App\Models\HseElectricalSafety;

class HseElectricalSafetyController extends Controller
{
    public function index()
    {
        $hseElectricalSafety = HseElectricalSafety::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseElectricalSafetyResource::collection($hseElectricalSafety);
    }

    public function store(StoreHseElectricalSafetyRequest $request)
    {
        $hseElectricalSafety = HseElectricalSafety::create($request->validated());
        return new HseElectricalSafetyResource($hseElectricalSafety);
    }

    public function show(HseElectricalSafety $hseElectricalSafety)
    {
        return HseElectricalSafetyResource::make($hseElectricalSafety);
        
    }

    public function edit(ApprovedHseElectricalSafetyRequest $request, HseElectricalSafety $hseElectricalSafety)
    {
        $hseElectricalSafety->approved_by = $request->approved_by;
        $hseElectricalSafety->approved_date = now();
        $hseElectricalSafety->save(); 

        return new HseElectricalSafetyResource($hseElectricalSafety);
    }

    public function update(UpdateHseElectricalSafetyRequest $request, HseElectricalSafety $hseElectricalSafety)
    {
        $hseElectricalSafety->update($request->validated());
        return new HseElectricalSafetyResource($hseElectricalSafety);
    }

   
    public function destroy(HseElectricalSafety $hseElectricalSafety)
    {
        $hseElectricalSafety->delete();
        $hseElectricalSafety = HseElectricalSafetyResource::collection(HseElectricalSafety::all());
        $totalCount = $hseElectricalSafety->count();

        return response()->json([
            'data' => $hseElectricalSafety,
            'total_count' => $totalCount,
        ]);
    }
}
