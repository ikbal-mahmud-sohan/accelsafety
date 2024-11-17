<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrainingAttendencesRequest;
use App\Http\Requests\UpdateTrainingRequest;
use App\Http\Resources\TrainingAttendences;
use App\Models\AssignTraining;
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

        // Store the signature file if present and get the URL
        if ($request->hasFile('signature')) {
            $path = $request->file('signature')->store('signatures', 'public');
            $imageUrl = Storage::url($path);
        }
    
        // Validate request data and add the signature URL
        $validatedData = $request->validated();
        $validatedData['signature'] = $imageUrl;
        
        // Create a new training attendance record
        $trainingAttendence = TrainingAttendence::create($validatedData);
        
        // Find the assigned training by serial number
        $assignTraining = AssignTraining::where('employee_id', $request->emp_id)->first();
    
        // Check if the assigned training exists and matches the provided employee ID and training topic ID
        if ($assignTraining && 
            $request->emp_id == $assignTraining->employee_id && 
            $request->training_topic_id == $assignTraining->training_topic_id) {
            
            // Update the assigned training status and date
            $assignTraining->update([
                'status' => 1,
                'date' => $request->training_date,
            ]);
        } else {
            // Handle the case where the serial number does not match or IDs do not match
            return response()->json(['error' => 'Invalid serial number, employee, or training topic.'], 400);
        }
    
        // Return the created training attendance record
        return response()->json($trainingAttendence, 201);
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
