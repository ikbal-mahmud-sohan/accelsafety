<?php

namespace App\Http\Controllers;

use App\Http\Requests\SafetyObservationRequest;
use App\Http\Requests\UpdateSafetyObservationRequest;
use App\Http\Resources\SafetyObservation as ResourcesSafetyObservation;
use App\Models\SafetyObservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;

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
        $imageUrls = [];
    if ($request->hasFile('problematic_progressive_images')) {
        foreach ($request->file('problematic_progressive_images') as $image) {
            $path = $image->store('problematic_progressive_images', 'public');
            $imageUrls[] = Storage::url($path);
        }
    }

    $validatedData = $request->validated();
    $validatedData['problematic_progressive_images'] = $imageUrls; 

    // Create a new SafetyObservation record with the validated data
    $safetyObservation = SafetyObservation::create($validatedData);

    // Return the newly created record using a resource
    return ResourcesSafetyObservation::make($safetyObservation);

    }

    public function show(SafetyObservation $safetyObservation)
    {
        return ResourcesSafetyObservation::make($safetyObservation);
    }

    public function update( UpdateSafetyObservationRequest $request, SafetyObservation $safetyObservation)
    {
        $safetyObservation->update($request->validated());
        return ResourcesSafetyObservation::make($safetyObservation);


    }
    
    public function destroy(SafetyObservation $safetyObservation)
    {
        $safetyObservation->delete();
        return response()->noContent();

    }
}
