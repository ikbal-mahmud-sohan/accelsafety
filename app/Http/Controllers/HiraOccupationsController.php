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
        $hiraOccupations = HiraOccupationsResource::collection(HiraOccupations::orderBy('id', 'desc')->get());
        $totacount = $hiraOccupations->count();
        return response()->json([
            'data' => $hiraOccupations,
            'total' => $totacount,
        ]);
    }

    
    public function store(StoreHiraOccupationsRequest $request)
    {
        $hiraOccupations = HiraOccupations::create($request->validated());
        HiraOccupationsResource::make($hiraOccupations);
        $hiraOccupations = HiraOccupationsResource::collection(HiraOccupations::orderBy('id', 'desc')->get());
        $totacount = $hiraOccupations->count();
        return response()->json([
            'data' => $hiraOccupations,
            'total' => $totacount,
        ]);
    }

    public function destroy(HiraOccupations $hiraOccupations)
    {
        $hiraOccupations->delete();
        $hiraOccupations = HiraOccupationsResource::collection(HiraOccupations::orderBy('id', 'desc')->get());
        $totacount = $hiraOccupations->count();
        return response()->json([
            'data' => $hiraOccupations,
            'total' => $totacount,
        ]);
    }
}
