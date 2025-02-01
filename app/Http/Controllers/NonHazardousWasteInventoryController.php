<?php

namespace App\Http\Controllers;

use App\Models\NonHazardousWasteInventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NonHazardousWasteInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     public function index()
{
    // Fetch records from non_hazardous_waste_inventories table
    $inventoryRecords = DB::table('non_hazardous_waste_inventories')
        ->selectRaw('
            month, item_name, waste_name, waste_type, employee_name, unit,  
            SUM(amount_of_waste) as total_amount_of_waste,
            MAX(waste) as waste
        ')
        ->groupBy('month', 'item_name', 'waste_name', 'waste_type', 'employee_name', 'unit')
        ->orderByRaw("FIELD(month, 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December')")
        ->orderBy('item_name')
        ->get();

    // Prepare the result grouped by month
    $result = [];
    foreach ($inventoryRecords as $record) {
        $month = $record->month;
        $itemName = $record->item_name;

        // Ensure the month exists in the result
        if (!isset($result[$month])) {
            $result[$month] = [
                'Month' => $month,
                'Items' => [],
                'total_biodegradable_waste' => 0,
                'total_no_biodegradable_waste' => 0,
                'total_waste' => 0,
                'waste' => $record->waste,  // Add waste from the database if needed
            ];
        }

        // Append item data
        $result[$month]['Items'][] = [
            'employee_name' => $record->employee_name,
            'Waste_Name' => $record->waste_name,
            'Waste_Type' => $record->waste_type,
            'Item_Name' => $itemName,
            'unit' => $record->unit,
            'Total_Amount_of_Waste' => $record->total_amount_of_waste,
        ];

        // Aggregate waste totals for biodegradable and non-biodegradable waste
        if ($record->waste_type == 'biodegradable') {
            $result[$month]['total_biodegradable_waste'] += $record->total_amount_of_waste;
        } elseif ($record->waste_type == 'non-biodegradable') {
            $result[$month]['total_no_biodegradable_waste'] += $record->total_amount_of_waste;
        }

        // Aggregate total waste
        $result[$month]['total_waste'] += $record->total_amount_of_waste;
    }

    // Re-index the result array for cleaner JSON output
    $finalResult = array_values($result);

    // Wrap everything in an object with a key "data"
    return response()->json(['data' => $finalResult]);
}
     

     

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json(['message' => 'Form for creating a new resource.']);
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
            'waste_name' => 'required|string',
            'waste_type' => 'required|string',
            'item_name' => 'required|string',
            'unit' => 'required|string',
            'waste' => 'required|string',
            'total_biodegradable_waste' => 'nullable|string',
            'total_no_biodegradable_waste' => 'nullable|string',
            'amount_of_waste' => 'nullable|numeric',
            'attachement' => 'nullable|json',
        ]);

        // Create a new record in the NonHazardousWasteInventory table
        $inventory = NonHazardousWasteInventory::create($validated);

        // Return the newly created resource
        return response()->json($inventory, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(NonHazardousWasteInventory $nonHazardousWasteInventory)
    {
        // Return the specific NonHazardousWasteInventory record
        return response()->json($nonHazardousWasteInventory);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NonHazardousWasteInventory $nonHazardousWasteInventory)
    {
        return response()->json(['message' => 'Form for editing the resource.']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NonHazardousWasteInventory $nonHazardousWasteInventory)
    {
        // Validate the request data
        $validated = $request->validate([
            'unit_name' => 'required|string',
            'month' => 'required|string',
            'date' => 'required|date',
            'employee_name' => 'required|string',
            'designation' => 'required|string',
            'waste_name' => 'required|string',
            'waste_type' => 'required|string',
            'item_name' => 'required|string',
            'unit' => 'required|string',
            'amount_of_waste' => 'nullable|numeric',
            'attachement' => 'nullable|json',
            'waste' => 'required|string',
            'total_biodegradable_waste' => 'nullable|string',
            'total_no_biodegradable_waste' => 'nullable|string',
        ]);

        // Update the record
        $nonHazardousWasteInventory->update($validated);

        // Return the updated record
        return response()->json($nonHazardousWasteInventory);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NonHazardousWasteInventory $nonHazardousWasteInventory)
    {
        // Delete the specific record
        $nonHazardousWasteInventory->delete();

        // Return a success message
        return response()->json(['message' => 'Resource deleted successfully.'], 200);
    }
}
