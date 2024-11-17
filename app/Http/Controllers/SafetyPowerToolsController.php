<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSafetyPowerToolsRequest;
use App\Http\Requests\UpdateSafetyPowerToolsRequest;
use App\Http\Resources\SafetyPowerToolsResource;
use App\Models\SafetyPowerTools;
use Illuminate\Http\Request;

class SafetyPowerToolsController extends Controller
{
    
    public function index()
    {
        $safetyPowerTools = SafetyPowerToolsResource::collection(SafetyPowerTools::all());
        $total = $safetyPowerTools->count();

        return response()->json([
            'data' => $safetyPowerTools,
            'total' => $total
        ]);
    }

    public function store(StoreSafetyPowerToolsRequest $request)
    {
        $safetyPowerTools = SafetyPowerTools::create($request->validated());

        return SafetyPowerToolsResource::make($safetyPowerTools);
        
    }

    public function show(SafetyPowerTools $safetyPowerTools)
    {
        return SafetyPowerToolsResource::make($safetyPowerTools);
    }

    public function update(UpdateSafetyPowerToolsRequest $request, SafetyPowerTools $safetyPowerTools)
    {
        $safetyPowerTools->update($request->validated());
        return SafetyPowerToolsResource::make($safetyPowerTools);
    }

    
    public function destroy(SafetyPowerTools $safetyPowerTools)
    {
        $safetyPowerTools->delete();
        $safetyPowerTools = SafetyPowerToolsResource::collection(SafetyPowerTools::all());
        $total = $safetyPowerTools->count();

        return response()->json([
            'data' => $safetyPowerTools,
            'total' => $total
        ]);
    }
}
