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
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $orderBy = $request->get('order_by', 'month');
        $sortBy = strtolower($request->get('sort_by', 'asc'));

        // Whitelist of allowed columns for ordering
        $allowedOrderColumns = [
            'month',
            'ground_water_unit', 'total_ground_water', 'total_gw_last_flow_meter', 'total_gw_current_flow_meter',
            'rain_water_unit', 'total_rain_water', 'total_rw_last_flow_meter', 'total_rw_current_flow_meter',
            'domestic_water_unit', 'total_domestic_water', 'total_dw_last_flow_meter', 'total_dw_current_flow_meter',
            'process_water_unit', 'total_process_water', 'total_pw_last_flow_meter', 'total_pw_current_flow_meter',
            'etp_inlet_water_unit', 'total_etp_inlet_water', 'total_eiw_last_flow_meter', 'total_eiw_current_flow_meter',
            'etp_outlet_water_unit', 'total_etp_outlet_water', 'total_eow_last_flow_meter', 'total_eow_current_flow_meter'
        ];

        // Validate order_by column
        if (!in_array($orderBy, $allowedOrderColumns)) {
            $orderBy = 'month';
        }

        // Validate sort_by direction
        if (!in_array($sortBy, ['asc', 'desc'])) {
            $sortBy = 'asc';
        }

        // Base query with search filter
        $baseQuery = DB::table('water_consumptions')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('month', 'like', "%{$search}%")
                        ->orWhere('ground_water_unit', 'like', "%{$search}%")
                        ->orWhere('rain_water_unit', 'like', "%{$search}%")
                        ->orWhere('domestic_water_unit', 'like', "%{$search}%")
                        ->orWhere('process_water_unit', 'like', "%{$search}%")
                        ->orWhere('etp_inlet_water_unit', 'like', "%{$search}%")
                        ->orWhere('etp_outlet_water_unit', 'like', "%{$search}%");
                });
            })
            ->selectRaw("
            month,
            MAX(ground_water_unit) AS ground_water_unit,
            SUM(ground_water) AS total_ground_water,
            SUM(gw_last_flow_meter) AS total_gw_last_flow_meter,
            SUM(gw_current_flow_meter) AS total_gw_current_flow_meter,
            MAX(rain_water_unit) AS rain_water_unit,
            SUM(rain_water) AS total_rain_water,
            SUM(rw_last_flow_meter) AS total_rw_last_flow_meter,
            SUM(rw_current_flow_meter) AS total_rw_current_flow_meter,
            MAX(domestic_water_unit) AS domestic_water_unit,
            SUM(domestic_water) AS total_domestic_water,
            SUM(dw_last_flow_meter) AS total_dw_last_flow_meter,
            SUM(dw_current_flow_meter) AS total_dw_current_flow_meter,
            MAX(process_water_unit) AS process_water_unit,
            SUM(process_water) AS total_process_water,
            SUM(pw_last_flow_meter) AS total_pw_last_flow_meter,
            SUM(pw_current_flow_meter) AS total_pw_current_flow_meter,
            MAX(etp_inlet_water_unit) AS etp_inlet_water_unit,
            SUM(etp_inlet_water) AS total_etp_inlet_water,
            SUM(eiw_last_flow_meter) AS total_eiw_last_flow_meter,
            SUM(eiw_current_flow_meter) AS total_eiw_current_flow_meter,
            MAX(etp_outlet_water_unit) AS etp_outlet_water_unit,
            SUM(etp_outlet_water) AS total_etp_outlet_water,
            SUM(eow_last_flow_meter) AS total_eow_last_flow_meter,
            SUM(eow_current_flow_meter) AS total_eow_current_flow_meter
        ")
            ->groupBy('month');

        // Apply ordering
        if ($orderBy === 'month') {
            // Order months chronologically
            $baseQuery->orderByRaw("FIELD(month, 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December') {$sortBy}");
        } else {
            $baseQuery->orderBy($orderBy, $sortBy); // Order by the selected column
        }

        // Execute query and paginate manually
        $results = $baseQuery->get();
        $total = $results->count(); // Total records after filtering
        $paginatedData = $results->slice(($currentPage - 1) * $perPage, $perPage)->values();

        return response()->json([
            'current_page' => $currentPage,
            'per_page' => $perPage,
            'total' => $total,
            'last_page' => ceil($total / $perPage),
            'search' => $search,
            'order_by' => $orderBy,
            'sort_by' => $sortBy,
            'data' => $paginatedData,
        ]);
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'unit_name' => 'required|string',
            'month' => 'required|string',
            'date' => 'required|string',
            'employee_name' => 'required|string',
            'designation' => 'required|string',
            'ground_water' => 'nullable|numeric',
            'ground_water_unit' => 'nullable|string',
            'gw_last_flow_meter' => 'nullable|string',
            'gw_current_flow_meter' => 'nullable|string',
            'rain_water' => 'nullable|numeric',
            'rain_water_unit' => 'nullable|string',
            'rw_last_flow_meter' => 'nullable|string',
            'rw_current_flow_meter' => 'nullable|string',
            'domestic_water' => 'nullable|numeric',
            'domestic_water_unit' => 'nullable|string',
            'dw_last_flow_meter' => 'nullable|string',
            'dw_current_flow_meter' => 'nullable|string',
            'process_water' => 'nullable|numeric',
            'process_water_unit' => 'nullable|string',
            'pw_last_flow_meter' => 'nullable|string',
            'pw_current_flow_meter' => 'nullable|string',
            'etp_inlet_water' => 'nullable|numeric',
            'etp_inlet_water_unit' => 'nullable|string',
            'eiw_last_flow_meter' => 'nullable|string',
            'eiw_current_flow_meter' => 'nullable|string',
            'etp_outlet_water' => 'nullable|numeric',
            'etp_outlet_water_unit' => 'nullable|string',
            'eow_last_flow_meter' => 'nullable|string',
            'eow_current_flow_meter' => 'nullable|string',
        ]);

        $waterConsumption = WaterConsumption::create($validatedData);

        return response()->json($waterConsumption, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WaterConsumption $waterConsumption)
    {
        $validatedData = $request->validate([
            'unit_name' => 'required|string',
            'month' => 'required|string',
            'date' => 'required|string',
            'employee_name' => 'required|string',
            'designation' => 'required|string',
            'ground_water' => 'nullable|numeric',
            'ground_water_unit' => 'nullable|string',
            'gw_last_flow_meter' => 'nullable|string',
            'gw_current_flow_meter' => 'nullable|string',
            'rain_water' => 'nullable|numeric',
            'rain_water_unit' => 'nullable|string',
            'rw_last_flow_meter' => 'nullable|string',
            'rw_current_flow_meter' => 'nullable|string',
            'domestic_water' => 'nullable|numeric',
            'domestic_water_unit' => 'nullable|string',
            'dw_last_flow_meter' => 'nullable|string',
            'dw_current_flow_meter' => 'nullable|string',
            'process_water' => 'nullable|numeric',
            'process_water_unit' => 'nullable|string',
            'pw_last_flow_meter' => 'nullable|string',
            'pw_current_flow_meter' => 'nullable|string',
            'etp_inlet_water' => 'nullable|numeric',
            'etp_inlet_water_unit' => 'nullable|string',
            'eiw_last_flow_meter' => 'nullable|string',
            'eiw_current_flow_meter' => 'nullable|string',
            'etp_outlet_water' => 'nullable|numeric',
            'etp_outlet_water_unit' => 'nullable|string',
            'eow_last_flow_meter' => 'nullable|string',
            'eow_current_flow_meter' => 'nullable|string',
        ]);

        $waterConsumption->update($validatedData);

        return response()->json($waterConsumption);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WaterConsumption $waterConsumption)
    {
        $waterConsumption->delete();

        return response()->json(['message' => 'Record deleted successfully.']);
    }
}
