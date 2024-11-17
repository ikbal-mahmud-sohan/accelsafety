<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHsePressureVesselRequest;
use App\Http\Requests\StoreHsePressureVesselRequest;
use App\Http\Requests\UpdateHsePressureVesselRequest;
use App\Http\Resources\HsePressureVesselResource;
use App\Models\HsePressureVessel;
use Illuminate\Http\Request;

class HsePressureVesselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hsePressureVessel = HsePressureVessel::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HsePressureVesselResource::collection($hsePressureVessel);
    }

    public function store(StoreHsePressureVesselRequest $request)
    {
        $hsePressureVessel = HsePressureVessel::create($request->validated());
        return new HsePressureVesselResource($hsePressureVessel);
    }

    public function show(HsePressureVessel $hsePressureVessel)
    {
        return HsePressureVesselResource::make($hsePressureVessel);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApprovedHsePressureVesselRequest $request, HsePressureVessel $hsePressureVessel)
    {
        $hsePressureVessel->approved_by = $request->approved_by;
        $hsePressureVessel->approved_date = now();
        $hsePressureVessel->save(); 

        return new HsePressureVesselResource($hsePressureVessel);
    }

   
    public function update(UpdateHsePressureVesselRequest $request, HsePressureVessel $hsePressureVessel)
    {
        $hsePressureVessel->update($request->validated());
        return new HsePressureVesselResource($hsePressureVessel);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HsePressureVessel $hsePressureVessel)
    {
        $hsePressureVessel->delete();
        $hsePressureVessel = HsePressureVesselResource::collection(HsePressureVessel::all());
        $totalCount = $hsePressureVessel->count();

        return response()->json([
            'data' => $hsePressureVessel,
            'total_count' => $totalCount,
        ]);
    }
}
