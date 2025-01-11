<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrainingTopics;
use App\Http\Resources\TrainingTopicsResource;
use App\Models\TrainingTopics;
use Illuminate\Http\Request;

class TrainingTopicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainingTopics = TrainingTopicsResource::collection(TrainingTopics::all());
        $totalCount = $trainingTopics->count();

        return response()->json([
            'data' => $trainingTopics,
            'total_count' => $totalCount,
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
    public function store(StoreTrainingTopics $request)
    {
        $training = TrainingTopics::create($request->validated());
        return TrainingTopicsResource::make($training);
    }

    /**
     * Display the specified resource.
     */
    public function show(TrainingTopics $trainingTopics)
    {
        return TrainingTopicsResource::make($trainingTopics);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TrainingTopics $trainingTopics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TrainingTopics $trainingTopics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TrainingTopics $trainingTopics)
    {
        //
    }
}
