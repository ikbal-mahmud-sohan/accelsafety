<?php

namespace App\Http\Controllers;

use App\Models\WaterConsumption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class WaterConsumptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch water consumption data grouped by month
        $waterRecords = DB::table('water_consumptions')
            ->selectRaw(
                "unit_name,
                month,
                date,
                employee_name,
                designation ,
                 SUM(process_water) as total_process_water,
                 SUM(domestic_water) as total_domestic_water,
                 SUM(etp_inlet_water) as total_etp_inlet_water,
                 SUM(etp_outlet_water) as total_etp_outlet_water,
                 SUM(deviation_of_etp_discharge) as total_deviation_of_etp_discharge,
                 SUM(dying_re_use_water) as total_dying_re_use_water,
                 SUM(rain_water) as total_rain_water,
                 SUM(process_water + domestic_water) as total_process_and_domestic"
            )
            ->groupBy('unit_name', 'month', 'date', 'employee_name', 'designation')  // Group by the 'month' column
            ->orderByRaw("FIELD(month, 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December')")  // Order by months
            ->get();
    
        // Initialize an empty array to store the final data
        $result = [];
    
        // Populate data by month
        foreach ($waterRecords as $record) {
            $unit_name = $record->unit_name;
            $month = $record->month;
            $date = $record->date;
            $employee_name = $record->employee_name;
            $designation = $record->designation;
            $date = $record->date;
            $employee_name = $record->employee_name;
            $designation = $record->designation;
            $total_process_water = $record->total_process_water;
            $total_domestic_water = $record->total_domestic_water;
            $total_etp_inlet_water = $record->total_etp_inlet_water;
            $total_etp_outlet_water = $record->total_etp_outlet_water;
            $total_deviation_of_etp_discharge = $record->total_deviation_of_etp_discharge;
            $total_dying_re_use_water = $record->total_dying_re_use_water;
            $total_rain_water = $record->total_rain_water;
            $total_process_and_domestic = $record->total_process_and_domestic;
    
            // Ensure the month exists in the result
            if (!isset($result[$month])) {
                $result[$month] = [
                    'Month' => $month,
                    'unit_name' => $unit_name,
                    'date' => $date,
                    'employee_name' => $employee_name,
                    'designation' => $designation,
                    'Process_Water' => 0,
                    'Domestic_Water' => 0,
                    'ETP_Inlet_Water'=> 0,
                    'ETP_Outlet_Water' => 0,
                    'Deviation_of_ETP_Discharge' => 0,
                    'Dying_Re_Use_Water' => 0,
                    'Rain_Water' => 0,
                    'Total_Process_and_Domestic_Water' => 0,
                ];
            }
    
            // Assign the total values to the corresponding categories
            $result[$month]['Process_Water'] = $total_process_water;
            $result[$month]['Domestic_Water'] = $total_domestic_water;
            $result[$month]['ETP_Inlet_Water'] = $total_etp_inlet_water;
            $result[$month]['ETP_Outlet_Water'] = $total_etp_outlet_water;
            $result[$month]['Deviation_of_ETP_Discharge'] = $total_deviation_of_etp_discharge;
            $result[$month]['Dying_Re_Use_Water'] = $total_dying_re_use_water;
            $result[$month]['Rain_Water'] = $total_rain_water;
            $result[$month]['Total_Process_and_Domestic_Water'] = $total_process_and_domestic;
        }
    
        // Re-index the result array for cleaner JSON output
        $finalResult = array_values($result);
    
        // Return the response as JSON
        return response()->json($finalResult);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // If using a blade view for creating a resource
        return view('water_consumption.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'unit_name' => 'required|string',
            'month' => 'required|string',
            'date' => 'required|string',
            'employee_name' => 'required|string',
            'designation' => 'required|string',
            'process_water' => 'nullable|numeric',
            'domestic_water' => 'nullable|numeric',
            'etp_inlet_water' => 'nullable|numeric',
            'etp_outlet_water' => 'nullable|numeric',
            'deviation_of_etp_discharge' => 'nullable|numeric',
            'dying_re_use_water' => 'nullable|numeric',
            'rain_water' => 'nullable|numeric',
        ]);

        // Create a new water consumption record
        $record = WaterConsumption::create($validated);
        return response()->json($record, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(WaterConsumption $waterConsumption)
    {
        // Return a single water consumption record
        return response()->json($waterConsumption);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WaterConsumption $waterConsumption)
    {
        // If using a blade view for editing
        return view('water_consumption.edit', compact('waterConsumption'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WaterConsumption $waterConsumption)
    {
        // Validate the request data
        $validated = $request->validate([
            'process_water' => 'nullable|numeric',
            'domestic_water' => 'nullable|numeric',
            'etp_inlet_water' => 'nullable|numeric',
            'etp_outlet_water' => 'nullable|numeric',
            'deviation_of_etp_discharge' => 'nullable|numeric',
            'dying_re_use_water' => 'nullable|numeric',
            'rain_water' => 'nullable|numeric',
        ]);

        // Update the water consumption record
        $waterConsumption->update($validated);
        return response()->json($waterConsumption);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WaterConsumption $waterConsumption)
    {
        // Delete the specified record
        $waterConsumption->delete();
        return response()->json(['message' => 'Record deleted successfully']);
    }
}
