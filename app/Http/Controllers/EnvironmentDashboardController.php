<?php

namespace App\Http\Controllers;

use App\Models\EnergyRecords;
use App\Models\NonHazardousWasteInventory;
use App\Models\WaterConsumption;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EnvironmentDashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $waterConsumptions = DB::table('water_consumptions')
        ->select(
            'month',
            DB::raw('SUM(ground_water + rain_water + domestic_water + process_water + etp_inlet_water + etp_outlet_water) as total_water_value')
        )
        ->groupBy('month')  // Ensure grouping by month
        ->get();

    // Convert values to numbers (remove quotes from numeric values)
    $waterConsumptions = $waterConsumptions->map(function ($item) {
        return [
            'month' => $item->month,
            'total_water_value' => (float) $item->total_water_value, // Return only total water per month
        ];
    });

    // Calculate the grand total for all months combined
    $overallTotalWater = $waterConsumptions->sum('total_water_value');

    // Fetch waste data
    $totalWaste = DB::table('non_hazardous_waste_inventories')->sum('amount_of_waste');
    $monthlyWaste = DB::table('non_hazardous_waste_inventories')
        ->select('month', DB::raw('SUM(amount_of_waste) as total_amount_of_waste'))
        ->groupBy('month')
        ->get();

    // Fetch energy usage data
    $totalEnergyUsage = DB::table('energy_records')->sum('input_numeric');
    $monthlyEnergyUsage = DB::table('energy_records')
        ->select('month', DB::raw('SUM(input_numeric) as total_input_numeric'))
        ->groupBy('month')
        ->get();

    // Return final response
    return response()->json([
        'water_consumptions' => $waterConsumptions,
        'total' => [
            'overall_total_water' => $overallTotalWater
        ],
        'total_waste' => $totalWaste,
        'monthly_waste' => $monthlyWaste,
        'total_energy_usage' => $totalEnergyUsage,
        'monthly_energy_usage' => $monthlyEnergyUsage,
    ]);
    }
}
