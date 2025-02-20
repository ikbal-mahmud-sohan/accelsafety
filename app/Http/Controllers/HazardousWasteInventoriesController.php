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
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $sortBy = $request->get('sort_by', 'month'); // Default to 'month'
        $sortOrder = $request->get('sort_order', 'asc'); // Default to 'asc'

        // Valid fields for sorting
        $validSortFields = [
            'month', 'total_dust', 'total_chemical_contaminated', 'total_chemical_drum', 'total_burn_oil',
            'total_dyeing_waste', 'total_electrical_waste', 'total_tube_light', 'total_toner',
            'total_battery', 'total_medical_waste', 'total_sludge'
        ];

        // Validate sort field
        if (!in_array($sortBy, $validSortFields)) {
            return response()->json(['message' => 'Invalid sort field.'], 400);
        }

        // Build query with sums and grouping
        $query = DB::table('hazardous_waste_inventories')
            ->selectRaw('
            month,
            SUM(dust) as total_dust,
            SUM(chemical_contaminated) as total_chemical_contaminated,
            SUM(chemical_drum) as total_chemical_drum,
            SUM(burn_oil) as total_burn_oil,
            SUM(dyeing_waste) as total_dyeing_waste,
            SUM(electrical_waste) as total_electrical_waste,
            SUM(tube_light) as total_tube_light,
            SUM(toner) as total_toner,
            SUM(battery) as total_battery,
            SUM(medical_waste) as total_medical_waste,
            SUM(sludge) as total_sludge
        ')
            ->groupBy('month');

        // Apply sorting
        if ($sortBy === 'month') {
            $query->orderByRaw("
            FIELD(month, 'January', 'February', 'March', 'April', 'May', 'June',
                  'July', 'August', 'September', 'October', 'November', 'December')
        ");
        } else {
            $query->orderBy($sortBy, $sortOrder);
        }

        // Manual pagination
        $total = $query->get()->count();
        $records = $query->offset(($currentPage - 1) * $perPage)->limit($perPage)->get();
        // Format result
        $result = $records->map(function ($record) {
            return [
                'Month' => $record->month,
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
        });

        return response()->json([
            'data' => $result,
            'current_page' => $currentPage,
            'per_page' => $perPage,
            'total' => $total,
            'last_page' => ceil($total / $perPage),
        ]);
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
