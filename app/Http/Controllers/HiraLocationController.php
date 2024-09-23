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
        $hiraLocation = HiraLocationResource::collection(HiraLocation::orderBy('id', 'desc')->get());
        $totacount = $hiraLocation->count();
        return response()->json([
            'data' => $hiraLocation,
            'total' => $totacount,
        ]);
    }

    public function store(StoreHiraLocationRequest $request)
    {
        $hiraLocation = HiraLocation::create($request->validated());
        HiraLocationResource::make($hiraLocation);
        $hiraLocation = HiraLocationResource::collection(HiraLocation::orderBy('id', 'desc')->get());
        $totacount = $hiraLocation->count();
        return response()->json([
            'data' => $hiraLocation,
            'total' => $totacount,
        ]);
    }

    public function destroy(HiraLocation $hiraLocation)
    {
        $hiraLocation->delete();
        $hiraLocation = HiraLocationResource::collection(HiraLocation::orderBy('id', 'desc')->get());
        $totacount = $hiraLocation->count();
        return response()->json([
            'data' => $hiraLocation,
            'total' => $totacount,
        ]);
        
    }
}
