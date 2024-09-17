<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHiraLocationRequest;
use App\Http\Resources\HiraLocationResource;
use App\Models\HiraLocation;
use Illuminate\Http\Request;

class HiraLocationController extends Controller
{
    
    public function index()
    {
        $hiraLocation = HiraLocationResource::collection(HiraLocation::all());
        $totacount = $hiraLocation->count();
        return response()->json([
            'data' => $hiraLocation,
            'total' => $totacount,
        ]);
    }

    public function store(StoreHiraLocationRequest $request)
    {
        $hiraLocation = HiraLocation::create($request->validated());
        return HiraLocationResource::make($hiraLocation);
    }

    public function destroy(HiraLocation $hiraLocation)
    {
        $hiraLocation->delete();
        $hiraLocation = HiraLocationResource::collection(HiraLocation::all());
        $totacount = $hiraLocation->count();
        return response()->json([
            'data' => $hiraLocation,
            'total' => $totacount,
        ]);
        
    }
}
