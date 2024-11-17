<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAssignSpecialTrainingRequest;
use App\Http\Resources\AssignSpecialTrainingResource;
use App\Models\AssignSpecialTraining;
use Illuminate\Http\Request;

class AssignSpecialTrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assignSpecialTrainings = AssignSpecialTraining::with('employee')
            ->get();

        return response()->json([
            'data' => $assignSpecialTrainings,
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
    public function store(StoreAssignSpecialTrainingRequest $request)
    {
        $training = AssignSpecialTraining::create($request->validated());
        return AssignSpecialTrainingResource::make($training);
    }

    /**
     * Display the specified resource.
     */
    public function show(AssignSpecialTraining $assignSpecialTraining)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AssignSpecialTraining $assignSpecialTraining)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AssignSpecialTraining $assignSpecialTraining)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AssignSpecialTraining $assignSpecialTraining)
    {
        //
    }
}
