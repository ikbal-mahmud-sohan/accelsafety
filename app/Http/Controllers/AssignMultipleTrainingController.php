<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMultipleAssignTraining;
use App\Http\Resources\AssignTraining as ResourcesAssignTraining;
use App\Models\AssignTraining;
use Illuminate\Http\Request;

class AssignMultipleTrainingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreMultipleAssignTraining $request)
    {
        $trainingsData = $request->validated()['trainings']; // Retrieve the validated training array
        $createdTrainings = [];

        // Iterate over the trainings data and create records
        foreach ($trainingsData as $trainingData) {
            $createdTrainings[] = AssignTraining::create($trainingData);
        }

        // Return the created records as a response
        return ResourcesAssignTraining::collection($createdTrainings);
    }
}
