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
    public function index(Request $request)
    {
        // Valid fields for filtering, searching, and sorting
        $validFields = [
            'month', 'fuel', 'unit_name', 'employee_name', 'designation',
            'item_name', 'item_code', 'type', 'energy_used'
        ];

        // Query parameters
        $search = $request->query('param', ''); // For global search
        $orderBy = $request->query('order_by', 'month'); // Sorting field
        $sortBy = $request->query('sort_by', 'asc');     // asc or desc
        $perPage = $request->query('per_page', 10);      // Pagination
        $currentPage = $request->query('current_page', 1);

        // Validate order_by field
        if (!in_array($orderBy, $validFields)) {
            return response()->json(['message' => 'Invalid order_by field.'], 400);
        }

        // Validate sort direction
        if (!in_array(strtolower($sortBy), ['asc', 'desc'])) {
            $sortBy = 'asc';
        }

        // Base query
        $query = DB::table('energy_records')
            ->selectRaw('
            month, fuel, unit_name, employee_name, designation,
            item_name, item_code, type, energy_used,
            SUM(input_numeric) as total_input_numeric
        ')
            ->groupBy('month', 'fuel', 'unit_name', 'employee_name', 'designation', 'item_name', 'item_code', 'type', 'energy_used');

        // Global search across valid fields
        if (!empty($search)) {
            $query->where(function ($q) use ($search, $validFields) {
                foreach ($validFields as $field) {
                    $q->orWhere($field, 'like', "%{$search}%");
                }
            });
        }

        // Dynamic field-based filtering (e.g., ?fuel=Dissel&month=December)
        foreach ($validFields as $field) {
            if ($request->has($field)) {
                $query->where($field, $request->query($field));
            }
        }

        // Apply sorting (special case for month sorting)
        if ($orderBy === 'month') {
            $query->orderByRaw("
            FIELD(month, 'January', 'February', 'March', 'April', 'May', 'June',
                  'July', 'August', 'September', 'October', 'November', 'December')
        ")->orderBy('month', $sortBy);
        } else {
            $query->orderBy($orderBy, $sortBy);
        }

        // Paginate results
        $energyRecords = $query->paginate($perPage, ['*'], 'page', $currentPage);

        // Format the data
        $result = [];
        foreach ($energyRecords as $record) {
            $monthKey = $record->month . '_' . $record->fuel;

            if (!isset($result[$monthKey])) {
                $result[$monthKey] = [
                    'Month' => $record->month,
                    'Fuel' => $record->fuel,
                    'TotalFuelAmount' => 0,
                    'UnitName' => $record->unit_name,
                    'EmployeeName' => $record->employee_name,
                    'Designation' => $record->designation,
                    'ItemName' => $record->item_name,
                    'ItemCode' => $record->item_code,
                    'Type' => $record->type,
                    'EnergyUsed' => $record->energy_used,
                ];
            }

            $result[$monthKey]['TotalFuelAmount'] += $record->total_input_numeric;
        }

        return response()->json([
            'current_page' => $energyRecords->currentPage(),
            'per_page' => $energyRecords->perPage(),
            'total' => $energyRecords->total(),
            'last_page' => $energyRecords->lastPage(),
            'data' => array_values($result),
        ]);
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
