<?php

namespace App\Http\Controllers;

use App\Models\Accident;
use App\Models\SafetyObservation;
use App\Models\AccidentInvestigation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SafetyObservationDashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $totalSafetyObservations = SafetyObservation::count();
        $firstAidCases = Accident::where('type_of_accident', 'First Aid')->count();
        $totalDaysLost = Accident::sum('days_lost');
    
        // ✅ Total accident records
        $totalAccidents = Accident::count();
        $totalInvestigations = AccidentInvestigation::count();
    
        // ✅ Get accident counts
        $accidentCounts = Accident::select('status', DB::raw('count(*) as total'))
            ->groupBy('status')
            ->get()
            ->pluck('total', 'status')
            ->toArray();
    
        // ✅ Get investigation counts
        $investigationCounts = AccidentInvestigation::select('status', DB::raw('count(*) as total'))
            ->groupBy('status')
            ->get()
            ->pluck('total', 'status')
            ->toArray();
    
        // ✅ Calculate accident status percentages (avoid division by zero)
        $accidentStatusCounts = [
            'Open' => $totalAccidents ? round(($accidentCounts['Created'] ?? 0) / $totalAccidents * 100, 2) : 0,
            'Progress' => $totalAccidents ? round(($accidentCounts['Open'] ?? 0) / $totalAccidents * 100, 2) : 0,
            'Closed' => $totalAccidents ? round(($accidentCounts['Closed'] ?? 0) / $totalAccidents * 100, 2) : 0,
        ];
    
        // ✅ Calculate investigation status percentages (avoid division by zero)
        $investigationStatusCounts = [
            'Open' => $totalInvestigations ? round(($investigationCounts['Assigned'] ?? 0) / $totalInvestigations * 100, 2) : 0,
            'Progress' => $totalInvestigations ? round((($investigationCounts['Reviewed'] ?? 0) + ($investigationCounts['change_request'] ?? 0)) / $totalInvestigations * 100, 2) : 0,
            'Closed' => $totalInvestigations ? round(($investigationCounts['Approved'] ?? 0) / $totalInvestigations * 100, 2) : 0,
        ];
    
        return response()->json([
            'totalSafetyObservations' => $totalSafetyObservations,
            'firstAidCases' => $firstAidCases,
            'totalDaysLost' => $totalDaysLost,
            'accidentStatusPercentages' => $accidentStatusCounts, // ✅ Now showing percentages
            'investigationStatusPercentages' => $investigationStatusCounts, // ✅ Now showing percentages
        ]);
    }
    


}
