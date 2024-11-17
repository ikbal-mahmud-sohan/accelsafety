<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseNoiseIntensityMeasurementRequest;
use App\Http\Resources\HseNoiseIntensityMeasurementResource;
use App\Models\HseNoiseIntensityMeasurement;
use Illuminate\Http\Request;

class HseNoiseIntensityMeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $hseNoiseIntensityMeasurement = HseNoiseIntensityMeasurementResource::collection(HseNoiseIntensityMeasurement::all());
       $total = $hseNoiseIntensityMeasurement->count();

       return response()->json([
        'data' => $hseNoiseIntensityMeasurement,
        'total' => $total,
       ]);
    }

    public function store(StoreHseNoiseIntensityMeasurementRequest $request)
    {
        $hseNoiseIntensityMeasurement = HseNoiseIntensityMeasurement::create($request->validated());
        
        return HseNoiseIntensityMeasurementResource::make($hseNoiseIntensityMeasurement);
    }

    /**
     * Display the specified resource.
     */
    public function show(HseNoiseIntensityMeasurement $hseNoiseIntensityMeasurement)
    {
        return HseNoiseIntensityMeasurementResource::make($hseNoiseIntensityMeasurement);
    }

    public function update(Request $request, HseNoiseIntensityMeasurement $hseNoiseIntensityMeasurement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseNoiseIntensityMeasurement $hseNoiseIntensityMeasurement)
    {
        $hseNoiseIntensityMeasurement->delete();
        $hseNoiseIntensityMeasurement = HseNoiseIntensityMeasurementResource::collection(HseNoiseIntensityMeasurement::all());
        $total = $hseNoiseIntensityMeasurement->count();

        return response()->json([
            'data' => $hseNoiseIntensityMeasurement,
            'total' => $total,
        ]);

    }
}
