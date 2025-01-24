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
        // Fetch the records from the NonHazardousWasteInventory table
        $inventoryRecords = DB::table('non_hazardous_waste_inventories')
            ->selectRaw('month, item_name, waste_name, waste_type, employee_name, unit,  SUM(amount_of_waste) as total_amount_of_waste')
            ->groupBy('month', 'item_name', 'waste_name', 'waste_type', 'employee_name', 'unit') // Group by all necessary fields
            ->orderByRaw("FIELD(month, 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December')")
            ->orderBy('item_name') // Order by item_name for consistency
            ->get();
    
        // Prepare the result grouped by month
        $result = [];
        foreach ($inventoryRecords as $record) {
            $month = $record->month;
            $itemName = $record->item_name;
            $waste_name = $record->waste_name;
            $waste_type = $record->waste_type;
            $employee_name = $record->employee_name;
            $unit = $record->unit;
    
            // Ensure the month exists in the result
            if (!isset($result[$month])) {
                $result[$month] = [
                    'Month' => $month,
                    'Items' => [],
                ];
            }
    
            // Add item data to the month
            $result[$month]['Items'] = [
                'employee_name' => $employee_name,
                'Waste_Name' => $waste_name,
                'Waste_Type' => $waste_type,
                'Item_Name' => $itemName,
                'unit' => $unit,
                'Total_Amount_of_Waste' => $record->total_amount_of_waste,
            ];
        }
    
        // Re-index the result array for cleaner JSON output
        $finalResult = array_values($result);
    
        // Return the final result as a JSON response
        return response()->json($finalResult);
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
