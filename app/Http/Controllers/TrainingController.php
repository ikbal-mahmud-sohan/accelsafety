<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrainingRequest;
use App\Http\Resources\Training as ResourcesTraining;
use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    
    public function index()
    {
        $training = ResourcesTraining::collection(Training::all());
        $totalCount = $training->count();
        return response()->json([
            'data' => $training,
            'total_count' => $totalCount,
        ]);
    }

    public function store(StoreTrainingRequest $request)
    {
        $training = Training::create($request->validated());
        return ResourcesTraining::make($training);
    }

    public function show(Training $training)
    {
        return ResourcesTraining::make($training);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Training $training)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Training $training)
    {
        $training->delete();
        $training = ResourcesTraining::collection(Training::all());
        $totalCount = $training->count();

        return response()->json([
            'data' => $training,
            'total_count' => $totalCount,
        ]);
    }
}
