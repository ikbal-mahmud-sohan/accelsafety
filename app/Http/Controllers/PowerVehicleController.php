<?php

namespace App\Http\Controllers;

use App\Models\PowerVehicle;
use Illuminate\Http\Request;

class PowerVehicleController extends Controller
{
    //
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $orderBy = $request->get('order_by', 'created_at');
        $sort_by = $request->get('sort_by', 'asc');

        // Base query with optional search
        $query = PowerVehicle::query()
            ->when($search, function ($q) use ($search) {
                $q->where(function ($q) use ($search) {
                    $q->orWhere('last_maintenance_date', 'like', "%{$search}%")
                        ->orWhere('capacity', 'like', "%{$search}%")
                        ->orWhere('type_of_vehicle', 'like', "%{$search}%")
                        ->orWhere('vehicle_owner', 'like', "%{$search}%")
                        ->orWhere('vehicle_id', 'like', "%{$search}%")
                        ->orWhere('unit_name', 'like', "%{$search}%")
                        ->orWhere('manufacturer_company_name', 'like', "%{$search}%");
                });
            })
            ->orderBy($orderBy, $sort_by);

        $total = $query->count();

        // Paginate results
        $data = $query->skip(($currentPage - 1) * $perPage)
            ->take($perPage)
            ->get();

        return response()->json([
            'data' => $data,
            'current_page' => $currentPage,
            'per_page' => $perPage,
            'total' => $total,
            'last_page' => ceil($total / $perPage),
            'search' => $search,
            'order_by' => $orderBy,
            'sort_by' => $sort_by,
        ]);
    }

    public function store(Request $request)
    {
       $validated= $request->validate([
            'last_maintenance_date' => 'nullable|date',
            'capacity' => 'nullable|numeric',
            'type_of_vehicle' => 'nullable|string',
            'vehicle_owner' => 'nullable|string',
            'vehicle_id' => 'nullable|string',
            'unit_name' => 'nullable|string',
            'manufacturer_company_name' => 'nullable|string',
        ]);
        $power_vehicle=PowerVehicle::create($validated);
        return response([
            'message' => 'Power Vehicle created successfully.',
            'data' => $power_vehicle,
        ],201);

    }

    public function edit( $id)
    {
        $power_vehicle=PowerVehicle::find($id);
        return response([
            'data' => $power_vehicle,
        ]);

    }

    public function update(Request $request,$id)
    {
        $validated= $request->validate([
            'last_maintenance_date' => 'nullable|date',
            'capacity' => 'nullable|numeric',
            'type_of_vehicle' => 'nullable|string',
            'vehicle_owner' => 'nullable|string',
            'vehicle_id' => 'nullable|string',
            'unit_name' => 'nullable|string',
            'manufacturer_company_name' => 'nullable|string',
        ]);
        $power_vehicle=PowerVehicle::find($id);
        $power_vehicle->update($validated);
        return response([
            'message' => 'Power Vehicle updated successfully.',
            'data' => $power_vehicle,
        ],200);

    }

    public function destroy($id)
    {
        $power_vehicle=PowerVehicle::find($id);
        $power_vehicle->delete();
        $all_vehicles=PowerVehicle::all();
        return response([
            'message' => 'Power Vehicle deleted successfully.',
            'all_vehicle' => $all_vehicles,
        ]);
    }
}
