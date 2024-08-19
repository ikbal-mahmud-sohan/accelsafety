<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrainingAttendencesRequest;
use App\Http\Requests\UpdateTrainingRequest;
use App\Http\Resources\TrainingAttendences;
use App\Models\TrainingAttendence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TrainingAttendenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainingAttendence = TrainingAttendences::collection(TrainingAttendence::all());
        $totalCount = $trainingAttendence->count();
        return response()->json([
            'data' => $trainingAttendence,
            'total_count' => $totalCount,
        ]);
    }
    
    public function store(StoreTrainingAttendencesRequest $request)
    {
        $imageUrl = null; 

        if ($request->hasFile('signature')) {
            $path = $request->file('signature')->store('signatures', 'public');
            $imageUrl = Storage::url($path);
        }
    
        $validatedData = $request->validated();
        $validatedData['signature'] = $imageUrl;
        $trainingAttendence = TrainingAttendence::create($validatedData);
        return TrainingAttendences::make($trainingAttendence);
    }

    /**
     * Display the specified resource.
     */
    public function show(TrainingAttendence $trainingAttendence)
    {
        return TrainingAttendences::make($trainingAttendence);
    }

    public function update(UpdateTrainingRequest $request, TrainingAttendence $trainingAttendence)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('signature')) {
            // Remove the old signature if it exists
            if ($trainingAttendence->signature) {
                Storage::delete(str_replace('/storage/', 'public/', $trainingAttendence->signature));
            }

            // Store the new signature and update the validated data
            $path = $request->file('signature')->store('signatures', 'public');
            $validatedData['signature'] = Storage::url($path);
        }

        // Update the training attendance record with validated data
        $trainingAttendence->update($validatedData);

        // Return the updated resource
        return TrainingAttendences::make($trainingAttendence);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TrainingAttendence $trainingAttendence)
    {
        $trainingAttendence->delete();
        $trainingAttendence = TrainingAttendences::collection(TrainingAttendence::all());
        $totalCount = $trainingAttendence->count();

        return response()->json([
            'data' => $trainingAttendence,
            'total_count' => $totalCount,
        ]);

    }
}
