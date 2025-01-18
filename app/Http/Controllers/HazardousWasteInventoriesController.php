<?php

namespace App\Http\Controllers;

use App\Models\HazardousWasteInventories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HazardousWasteInventoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = DB::table('hazardous_waste_inventories')
            ->selectRaw('month, SUM(dust) as total_dust, SUM(chemical_contaminated) as total_chemical_contaminated, 
                        SUM(chemical_drum) as total_chemical_drum, SUM(burn_oil) as total_burn_oil,
                        SUM(dyeing_waste) as total_dyeing_waste, SUM(electrical_waste) as total_electrical_waste,
                        SUM(tube_light) as total_tube_light, SUM(toner) as total_toner,
                        SUM(battery) as total_battery, SUM(medical_waste) as total_medical_waste,
                        SUM(sludge) as total_sludge')
            ->groupBy('month')
            ->orderByRaw("FIELD(month, 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December')")
            ->get();

        // Initialize an empty array to store the final data
        $result = [];

        // Populate data by month
        foreach ($records as $record) {
            $month = $record->month;
            $result[$month] = [
                'Month' => $month,
                'Dust' => $record->total_dust,
                'Chemical Contaminated' => $record->total_chemical_contaminated,
                'Chemical Drum' => $record->total_chemical_drum,
                'Burn Oil' => $record->total_burn_oil,
                'Dyeing Waste' => $record->total_dyeing_waste,
                'Electrical Waste' => $record->total_electrical_waste,
                'Tube Light' => $record->total_tube_light,
                'Toner' => $record->total_toner,
                'Battery' => $record->total_battery,
                'Medical Waste' => $record->total_medical_waste,
                'Sludge' => $record->total_sludge,
            ];
        }

        return response()->json($result);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'month' => 'required|string',
            'dust' => 'nullable|numeric',
            'chemical_contaminated' => 'nullable|numeric',
            'chemical_drum' => 'nullable|numeric',
            'burn_oil' => 'nullable|numeric',
            'dyeing_waste' => 'nullable|numeric',
            'electrical_waste' => 'nullable|numeric',
            'tube_light' => 'nullable|numeric',
            'toner' => 'nullable|numeric',
            'battery' => 'nullable|numeric',
            'medical_waste' => 'nullable|numeric',
            'sludge' => 'nullable|numeric',
        ]);

        // Create a new hazardous waste inventory record
        $record = HazardousWasteInventories::create($validated);

        return response()->json($record, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(HazardousWasteInventories $hazardousWasteInventory)
    {
        return response()->json($hazardousWasteInventory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HazardousWasteInventories $hazardousWasteInventory)
    {
        $validated = $request->validate([
            'dust' => 'nullable|numeric',
            'chemical_contaminated' => 'nullable|numeric',
            'chemical_drum' => 'nullable|numeric',
            'burn_oil' => 'nullable|numeric',
            'dyeing_waste' => 'nullable|numeric',
            'electrical_waste' => 'nullable|numeric',
            'tube_light' => 'nullable|numeric',
            'toner' => 'nullable|numeric',
            'battery' => 'nullable|numeric',
            'medical_waste' => 'nullable|numeric',
            'sludge' => 'nullable|numeric',
        ]);

        // Update the record
        $hazardousWasteInventory->update($validated);

        return response()->json($hazardousWasteInventory);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HazardousWasteInventories $hazardousWasteInventory)
    {
        // Delete the record
        $hazardousWasteInventory->delete();

        return response()->json(['message' => 'Record deleted successfully']);
    }
}
