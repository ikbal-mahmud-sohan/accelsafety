<?php

namespace App\Http\Controllers;

use App\Models\EnergyRecords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class EnergyRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch unique emission types dynamically
        $types = DB::table('energy_records')
            ->select('type')
            ->distinct()
            ->pluck('type')
            ->toArray();
    
        // Fetch all required fields along with total input_numeric per month grouped by fuel
        $energyRecords = DB::table('energy_records')
            ->selectRaw('month, fuel, unit_name, employee_name, designation, item_name, item_code, type, energy_used, SUM(input_numeric) as total_input_numeric')
            ->groupBy('month', 'fuel', 'unit_name', 'employee_name', 'designation', 'item_name', 'item_code', 'type', 'energy_used')
            ->orderByRaw("FIELD(month, 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December')")
            ->get();
    
        // Initialize an empty array to store the final data
        $result = [];
    
        // Populate data dynamically for each record
        foreach ($energyRecords as $record) {
            $month = $record->month;
            $key = $month . '_' . $record->fuel; // Unique key to prevent overwriting fuel data
    
            // Ensure the month entry exists in the result
            if (!isset($result[$key])) {
                $result[$key] = [
                    'Month' => $month,
                    'Fuel' => $record->fuel,  // Separate field for fuel type
                    'TotalFuelAmount' => 0,   // Initialize total fuel amount
                    'UnitName' => $record->unit_name,
                    'EmployeeName' => $record->employee_name,
                    'Designation' => $record->designation,
                    'ItemName' => $record->item_name,
                    'ItemCode' => $record->item_code,
                    'Type' => $record->type,
                    'EnergyUsed' => $record->energy_used,
                ];
            }
    
            // Add the total input_numeric for that fuel
            $result[$key]['TotalFuelAmount'] += $record->total_input_numeric;
        }
    
        // Optionally return the result as JSON or to a view
        return response()->json(array_values($result)); // Use array_values to return a numerically indexed array
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
            'unit_name' => 'required|string',
            'date' => 'required|string',
            'month' => 'required|string',
            'employee_name' => 'required|string',
            'designation' => 'required|string',
            'item_name' => 'required|string',
            'item_code' => 'required|string',
            'type' => 'required|string',
            'fuel' => 'required|string',
            'energy_used' => 'required|string',
            'input_numeric' => 'required|numeric',
            'attachement' => 'sometimes|array',
            'all_ghgs' => 'nullable|string',

        ]);
        
        $imageUrls = [];
        if ($request->hasFile('attachement')) {
            foreach ($request->file('attachement') as $image) {
                $path = $image->store('attachement', 'public');
                $imageUrls[] = Storage::url($path);
            }
            $validated['attachement'] = $imageUrls;
        }

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
            'fuel' => 'required|string',
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
