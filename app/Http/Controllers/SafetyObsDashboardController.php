<?php

namespace App\Http\Controllers;
use App\Http\Resources\SafetyObservation as ResourcesSafetyObservation;
use App\Models\SafetyObservation;

use Illuminate\Http\Request;

class SafetyObsDashboardController extends Controller
{
    public function responsible_department(Request $request){

        // Static department structure
    $departments = [
        'MML',
        'Electrical',
        'Mechanical',
        'SMS',
        'CCM',
        'Admin & Facilities',
        'HSE',
        'QCM',
        'All Over',
    ];

    $results = [];
    $grandTotal = 0;
    $grandTrueStatus = 0;

    // Get all safety observations
    $safetyObservation = SafetyObservation::all();

    // Group by `resp_department`
    $groupedRDObservations = $safetyObservation->groupBy('resp_department');

    // Process each department
    foreach ($departments as $department) {
        // Create an alias for the department name
        $alias = preg_replace('/[^A-Za-z0-9]/', '', $department);

        $observations = $groupedRDObservations->get($department, collect());

        $total = $observations->count();
        $trueStatus = $observations->filter(fn($observation) => $observation->status)->count();
        $falseStatus = $total - $trueStatus;

        // Add to grand totals
        $grandTotal += $total;
        $grandTrueStatus += $trueStatus;

        $results[$alias] = [
            'total' => $total,
            'true_status' => $trueStatus,
            'false_status' => $falseStatus,
            'percentage_true' => $total > 0 ? round(($trueStatus / $total) * 100, 2) : 0,
        ];
    }

    // Calculate overall percentage
    $overallPercentage = $grandTotal > 0 ? round(($grandTrueStatus / $grandTotal) * 100, 2) : 0;

    // Include total percentage in the response
    return response()->json([
        'data' => $results,
        'totals' => [
            'total' => $grandTotal,
            'true_status' => $grandTrueStatus,
            'false_status' => $grandTotal - $grandTrueStatus,
            'percentage_true' => $overallPercentage,
        ],
    ]);

    }
    public function owner_department(Request $request){
         // Static department structure
            $departments = [
                'MML',
                'Electrical',
                'Mechanical',
                'SMS',
                'CCM',
                'Admin & Facilities',
                'HSE',
                'QCM',
                'All Over',
            ];

            $results = [];
            $grandTotal = 0;
            $grandTrueStatus = 0;

            // Get all safety observations
            $safetyObservation = SafetyObservation::all();

            // Group by `resp_department`
            $groupedRDObservations = $safetyObservation->groupBy('owner_department');

            // Process each department
            foreach ($departments as $department) {
                // Create an alias for the department name
                $alias = preg_replace('/[^A-Za-z0-9]/', '', $department);

                $observations = $groupedRDObservations->get($department, collect());

                $total = $observations->count();
                $trueStatus = $observations->filter(fn($observation) => $observation->status)->count();
                $falseStatus = $total - $trueStatus;

                // Add to grand totals
                $grandTotal += $total;
                $grandTrueStatus += $trueStatus;

                $results[$alias] = [
                    'total' => $total,
                    'true_status' => $trueStatus,
                    'false_status' => $falseStatus,
                    'percentage_true' => $total > 0 ? round(($trueStatus / $total) * 100, 2) : 0,
                ];
            }

            // Calculate overall percentage
            $overallPercentage = $grandTotal > 0 ? round(($grandTrueStatus / $grandTotal) * 100, 2) : 0;

            // Include total percentage in the response
            return response()->json([
                'data' => $results,
                'totals' => [
                    'total' => $grandTotal,
                    'true_status' => $grandTrueStatus,
                    'false_status' => $grandTotal - $grandTrueStatus,
                    'percentage_true' => $overallPercentage,
                ],
            ]);
    }
    public function due_tracker(Request $request){
        // Retrieve the `days` filter from the request
        $days = $request->input('days', null);

        // Get all safety observations
        $query = SafetyObservation::query();

        // If `days` is specified, filter observations by date range
        if (!is_null($days)) {
            $query->where('created_at', '>=', now()->subDays($days));
        }

        $safetyObservations = $query->get();

        // Group observations by `resp_department`
        $groupedObservations = $safetyObservations->groupBy('resp_department');

        $departments = [
            'MML', 'Electrical', 'Mechanical', 'SMS',
            'CCM', 'Admin & Facilities', 'HSE',
            'QCM', 'All Over'
        ];

        $dueCounts = [];

        foreach ($departments as $department) {
            $alias = preg_replace('/[^A-Za-z0-9]/', '', $department);
            // Get all observations for the department
            $departmentObservations = $groupedObservations->get($department, collect());

            // Count the false observations
            $falseCount = $departmentObservations->filter(function ($observation) {
                return !$observation->status;
            })->count();

            $dueCounts[$alias] = [
                'false_status_count' => $falseCount,
            ];
        }

        // Calculate the total false count across all departments
        $totalFalseCount = array_reduce($dueCounts, function ($carry, $department) {
            return $carry + $department['false_status_count'];
        }, 0);

        return response()->json([
            'data' => [
                'counts' => $dueCounts,
                'totals' => [
                    'false_status_count' => $totalFalseCount,
                ],
            ],
        ]);
    }

}
