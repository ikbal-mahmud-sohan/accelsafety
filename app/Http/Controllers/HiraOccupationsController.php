<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHiraOccupationsRequest;
use App\Http\Resources\HiraOccupationsResource;
use App\Models\HiraOccupations;
use Illuminate\Http\Request;

class HiraOccupationsController extends Controller
{
    
    public function index()
    {
        $hiraOccupations = HiraOccupationsResource::collection(HiraOccupations::all());
        $totacount = $hiraOccupations->count();
        return response()->json([
            'data' => $hiraOccupations,
            'total' => $totacount,
        ]);
    }

    
    public function store(StoreHiraOccupationsRequest $request)
    {
        $hiraTypeOfActivity = HiraOccupations::create($request->validated());
        return HiraOccupationsResource::make($hiraTypeOfActivity);
    }

    public function destroy(HiraOccupations $hiraOccupations)
    {
        $hiraOccupations->delete();
        $hiraOccupations = HiraOccupationsResource::collection(HiraOccupations::all());
        $totacount = $hiraOccupations->count();
        return response()->json([
            'data' => $hiraOccupations,
            'total' => $totacount,
        ]);
    }
}
