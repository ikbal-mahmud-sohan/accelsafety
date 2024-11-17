<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHiaEngineeringRequest;
use App\Http\Resources\HiraEngineeringResource;
use App\Models\HiraEngineering;
use Illuminate\Http\Request;

class HiraEngineeringController extends Controller
{
    
    public function index()
    {
        $hiraEngineering = HiraEngineeringResource::collection(HiraEngineering::orderBy('id', 'desc')->get());
        $totacount = $hiraEngineering->count();
        return response()->json([
            'data' => $hiraEngineering,
            'total' => $totacount,
        ]);
    }

    public function store(StoreHiaEngineeringRequest $request)
    {
        $hiraEngineering = HiraEngineering::create($request->validated());
         HiraEngineeringResource::make($hiraEngineering);
        $hiraEngineering = HiraEngineeringResource::collection(HiraEngineering::orderBy('id', 'desc')->get());
        $totacount = $hiraEngineering->count();
        return response()->json([
            'data' => $hiraEngineering,
            'total' => $totacount,
        ]);
    }

    public function destroy(HiraEngineering $hiraEngineering)
    {
        $hiraEngineering->delete();
        $hiraEvent = HiraEngineeringResource::collection(HiraEngineering::orderBy('id', 'desc')->get());
        $totacount = $hiraEvent->count();
        return response()->json([
            'data' => $hiraEvent,
            'total' => $totacount,
        ]);
    }
}
