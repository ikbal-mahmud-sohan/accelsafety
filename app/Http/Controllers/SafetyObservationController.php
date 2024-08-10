<?php

namespace App\Http\Controllers;

use App\Http\Requests\SafetyObservationRequest;
use App\Http\Requests\UpdateSafetyObservationRequest;
use App\Http\Resources\SafetyObservation as ResourcesSafetyObservation;
use App\Models\SafetyObservation;
use Illuminate\Http\Request;

class SafetyObservationController extends Controller
{
    
    public function index()
    {
        $safetyObservation = ResourcesSafetyObservation::collection(SafetyObservation::all());
        $totalCount = $safetyObservation->count();

        return response()->json([
            'data' => $safetyObservation,
            'total_count' => $totalCount,
        ]);
    }

    public function store(SafetyObservationRequest $request)
    {
       $safetyObservation = SafetyObservation::create($request->validated());
       return ResourcesSafetyObservation::make($safetyObservation);

    }

    public function show(SafetyObservation $safetyObservation)
    {
        return ResourcesSafetyObservation::make($safetyObservation);
    }

    public function update( UpdateSafetyObservationRequest $request, SafetyObservation $safetyObservation)
    {
        dd($safetyObservation);
        $safetyObservation->update($request->validated());
        return ResourcesSafetyObservation::make($safetyObservation);


    }
    
    public function destroy(SafetyObservation $safetyObservation)
    {
        $safetyObservation->delete();
        return response()->noContent();

    }
}
