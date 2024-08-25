<?php

namespace App\Http\Controllers;

use App\Models\EmployeeInfo;
use Illuminate\Http\Request;

class TrainingAssesmentController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $employees = EmployeeInfo::with('assignTrainings.trainingTopic', 'assignSpecialTrainings')
            ->get()
            ->map(function ($employee) {
                // Check if all assigned regular trainings are complete
                $allTrainingsComplete = $employee->assignTrainings->every(function ($training) {
                    return $training->status === 1 || $training->status === true;
                });

                // Check if all assigned special trainings are complete
                $allSpecialTrainingsComplete = $employee->assignSpecialTrainings->every(function ($specialTraining) {
                    // Assuming there's a 'status' or similar field to check
                    // If there's no such field, adjust this condition accordingly
                    return $specialTraining->status === 1 || $specialTraining->status === true;
                });

                // Main status is true only if both all regular and special trainings are complete
                $mainStatus = $allTrainingsComplete && $allSpecialTrainingsComplete;

                return [
                    'employee' => $employee,
                    'total_trainings' => $employee->assignTrainings->count(),
                    'total_special_trainings' => $employee->assignSpecialTrainings->count(),
                    'main_status' => $mainStatus, // true if all trainings are complete, false otherwise
                ];
            });

        // Return the list of employees, including their training info and main status, as a JSON response
        return response()->json([
            'TrainingAssessment' => $employees,
        ]);
    }
}
