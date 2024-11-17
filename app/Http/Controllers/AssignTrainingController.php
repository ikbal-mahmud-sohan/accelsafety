<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAssignTraining;
use App\Http\Resources\AssignTraining as ResourcesAssignTraining;
use App\Models\AssignTraining;
use Illuminate\Http\Request;

class AssignTrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $assignTrainings = AssignTraining::with(['employee', 'trainingTopic'])->get();
        return response()->json([
            'assign_trainings' => $assignTrainings,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssignTraining $request)
    {
        $training = AssignTraining::create($request->validated());
        return ResourcesAssignTraining::make($training);
    }

    /**
     * Display the specified resource.
     */
    public function show(AssignTraining $assignTraining)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AssignTraining $assignTraining)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AssignTraining $assignTraining)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AssignTraining $assignTraining)
    {
        //
    }
}
