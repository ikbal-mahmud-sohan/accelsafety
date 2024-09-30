<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseVehicleSafetyRequest;
use App\Http\Requests\UpdateHseVehicleSafetyRequest;
use App\Http\Resources\HseVehicleSafetyResource;
use App\Models\HseVehicleSafety;
use Illuminate\Http\Request;

class HseVehicleSafetyController extends Controller
{
   
    public function index()
    {
       $hseVehicleSafety = HseVehicleSafetyResource::collection(HseVehicleSafety::all());
       $total = $hseVehicleSafety->count();
        return response()->json([
            'data' => $hseVehicleSafety,
            'total' => $total,
        ]);
    }

    public function store(StoreHseVehicleSafetyRequest $request)
    {
        $hseVehicleSafety = HseVehicleSafety::create($request->validated());
        return HseVehicleSafetyResource::make($hseVehicleSafety);
        
    }

    public function show(HseVehicleSafety $hseVehicleSafety)
    {
        return HseVehicleSafetyResource::make($hseVehicleSafety);
    }

    public function update(UpdateHseVehicleSafetyRequest $request, HseVehicleSafety $hseVehicleSafety)
    {
        $hseVehicleSafety->update($request->validated());
        return new HseVehicleSafetyResource($hseVehicleSafety);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseVehicleSafety $hseVehicleSafety)
    {
        $hseVehicleSafety->delete();
        $hseVehicleSafety = HseVehicleSafetyResource::collection(HseVehicleSafety::all());
        $total = $hseVehicleSafety->count();
            return response()->json([
                'data' => $hseVehicleSafety,
                'total' => $total,
            ]);
    }
}
