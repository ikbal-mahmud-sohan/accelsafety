<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLightIntensityMeasurementRequest;
use App\Http\Resources\LightIntensityMeasurementResource;
use App\Models\LightIntensityMeasurement;
use Illuminate\Http\Request;

class LightIntensityMeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lightIntensityMeasurement = LightIntensityMeasurementResource::collection(LightIntensityMeasurement::all());
        $total = $lightIntensityMeasurement->count();

        return response()->json([
            'data' => $lightIntensityMeasurement,
            'total' => $total
        ]);
    }

    public function store(StoreLightIntensityMeasurementRequest $request)
    {
        $lightIntensityMeasurement = LightIntensityMeasurement::create($request->validated());
        return LightIntensityMeasurementResource::make($lightIntensityMeasurement);
    }

    public function show(LightIntensityMeasurement $lightIntensityMeasurement)
    {
        return LightIntensityMeasurementResource::make($lightIntensityMeasurement);
    }

    public function update(Request $request, LightIntensityMeasurement $lightIntensityMeasurement)
    {
        //
    }

    public function destroy(LightIntensityMeasurement $lightIntensityMeasurement)
    {
        $lightIntensityMeasurement->delete();
        $lightIntensityMeasurement = LightIntensityMeasurementResource::collection(LightIntensityMeasurement::all());
        $total = $lightIntensityMeasurement->count();

        return response()->json([
            'data' => $lightIntensityMeasurement,
            'total' => $total
        ]);

    }
}
