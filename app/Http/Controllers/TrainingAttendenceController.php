<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrainingAttendencesMultipleRequest;
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
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $sortBy = $request->get('order_by', 'id'); // Default sort field
        $sortOrder = $request->get('sort_by', 'asc'); // Default sort order

        // Base query with employee relationship
        $query = TrainingAttendence::query()->with('employee');

        // Apply search to specified fields
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('serial_number', 'like', "%$search%")
                    ->orWhere('training_topic_id', 'like', "%$search%")
                    ->orWhere('iso_standard', 'like', "%$search%")
                    ->orWhere('venue', 'like', "%$search%")
                    ->orWhere('facilitator', 'like', "%$search%")
                    ->orWhere('training_date', 'like', "%$search%")
                    ->orWhere('training_duration', 'like', "%$search%")
                    ->orWhere('emp_id', 'like', "%$search%")
                    ->orWhere('title', 'like', "%$search%")
                    ->orWhere('function', 'like', "%$search%")
                    ->orWhere('business', 'like', "%$search%")
                    ->orWhere('signature', 'like', "%$search%");
            });
        }
        //  Apply sorting (only for valid fields)
        $validSortFields = [
            'id', 'serial_number', 'training_topic_id', 'iso_standard', 'venue',
            'facilitator', 'training_date', 'training_duration', 'emp_id',
            'title', 'function', 'business', 'signature', 'created_at'
        ];

        if (in_array($sortBy, $validSortFields)) {
            $query->orderBy($sortBy, $sortOrder);
        }

        // Pagination
        $total = $query->count();
        $trainingAttendances = $query->skip(($currentPage - 1) * $perPage)->take($perPage)->get();

        // Resource collection
        $trainingAttendenceResource = TrainingAttendences::collection($trainingAttendances);

        return response()->json([
            'total_count' => $total,
            'current_page' => $currentPage,
            'per_page' => $perPage,
            'last_page' => ceil($total / $perPage),
            'data' => $trainingAttendenceResource,
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
        }

        // Return the created training attendance record
        return response()->json($trainingAttendence, 201);
    }

    public function storeForMultipleEmployees(StoreTrainingAttendencesMultipleRequest $request)
        {
            $imageUrl = null;

            // Store the signature file if present and get the URL
            if ($request->hasFile('signature')) {
                $path = $request->file('signature')->store('signatures', 'public');
                $imageUrl = Storage::url($path);
            }

            // Validate request data
            $validatedData = $request->validated();
            $validatedData['signature'] = $imageUrl;


            foreach ($validatedData['emp_id'] as $index => $empId) {
                // Clone validatedData to avoid mutating the original array
                $data = $validatedData;

                // Assign the specific emp_id for the current iteration
                $data['emp_id'] = $empId;

                // Increment serial_number for each iteration
                $data['serial_number'] = (int)$validatedData['serial_number'] + $index;

                // Create a new training attendance record
                $trainingAttendance = TrainingAttendence::create($data);

                // Find the assigned training by emp_id and training_topic_id
                $assignTraining = AssignTraining::where('employee_id', $empId)
                    ->where('training_topic_id', $request->training_topic_id)
                    ->first();

                // Update the assigned training if it exists
                if ($assignTraining) {
                    $assignTraining->update([
                        'status' => 1,
                        'date' => $request->training_date,
                    ]);
                }
            }

            // Return success response
            return response()->json(['message' => 'Training attendance stored for all employees.'], 201);
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
