<?php

namespace App\Http\Controllers;

use App\Models\EnergyRecords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnergyRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $energyRecords = DB::table('energy_records')
        ->selectRaw('month, type, SUM(input_numeric) as total_input_numeric')
        ->groupBy('month', 'type')
        ->orderByRaw("FIELD(month, 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December')")
        ->get();

    // Initialize an empty array to store the final data
    $result = [];

    // Populate data by month
    foreach ($energyRecords as $record) {
        $month = $record->month;
        $type = $record->type;
        $total = $record->total_input_numeric;

        // Ensure the month exists in the result
        if (!isset($result[$month])) {
            $result[$month] = [
                'Month' => $month,
                'ERC' => 0,
                'Diesel' => 0,
                'CNG' => 0,
                'LPG' => 0,
            ];
        }

        // Assign the total to the correct type
        $result[$month][$type] = $total;
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
        // You can return a view or a form to create a new energy record
        // return view('energy_records.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'month' => 'required|string',
            'company_name' => 'required|string',
            'unit' => 'required|string',
            'type' => 'required|string',
            'energy_used' => 'required|string',
            'input_numeric' => 'required|numeric',
        ]);

        // Create a new energy record with the validated data
        $energyRecord = EnergyRecords::create($validated);

        return response()->json([
            'message' => 'Energy record created successfully!',
            'data' => $energyRecord
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(EnergyRecords $energyRecord)
    {
        // Return the energy record as a JSON response
        return response()->json($energyRecord);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EnergyRecords $energyRecord)
    {
        // You can return a view to edit the existing energy record
        // return view('energy_records.edit', compact('energyRecord'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EnergyRecords $energyRecord)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'month' => 'required|string',
            'company_name' => 'required|string',
            'unit' => 'required|string',
            'type' => 'required|string',
            'energy_used' => 'required|numeric',
            'input_numeric' => 'required|numeric',
        ]);

        // Update the existing energy record with the validated data
        $energyRecord->update($validated);

        return response()->json([
            'message' => 'Energy record updated successfully!',
            'data' => $energyRecord
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EnergyRecords $energyRecord)
    {
        // Delete the energy record
        $energyRecord->delete();

        return response()->json([
            'message' => 'Energy record deleted successfully!'
        ]);
    }
}
