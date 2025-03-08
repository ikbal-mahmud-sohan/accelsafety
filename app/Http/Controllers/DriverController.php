<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DriverController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $orderBy = $request->get('order_by', 'id');
        $sort_by = $request->get('sort_by', 'asc');

        // Base query with optional search
        $query = Driver::query()
            ->when($search, function ($q) use ($search) {
                $q->where(function ($q) use ($search) {
                    $q->orWhere('driver_name', 'like', "%{$search}%")
                        ->orWhere('driver_license_no', 'like', "%{$search}%")
                        ->orWhere('driver_competency', 'like', "%{$search}%");
                });
            })
            ->orderBy($orderBy, $sort_by); // Apply ordering

        $total = $query->count();

        // Paginate results
        $data = $query->skip(($currentPage - 1) * $perPage)
            ->take($perPage)
            ->get();

        return response()->json([
            'current_page' => $currentPage,
            'per_page' => $perPage,
            'total' => $total,
            'last_page' => ceil($total / $perPage),
            'search' => $search,
            'order_by' => $orderBy,
            'sort_by' => $sort_by,
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'driver_name' => 'required',
            'driver_license_no' => 'required|numeric|unique:drivers,driver_license_no',
            'driver_competency' => 'required',
        ]);
        $driver = Driver::create($validated);
        if ($driver) {
            return response()->json([
                'message' => 'Driver created successfully',
                'data' => $driver,
            ], 201);
        } else {
            return response()->json([
                'message' => 'Driver not created successfully',
            ], 500);
        }

    }

    public function show($id)
    {
        try {
            $driver = Driver::find($id);
            return response()->json([
                'data' => $driver,
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Driver not found',
            ], 404);
        }
    }

    public function edit($id)
    {
        try {
            $driver = Driver::find($id);
            return response()->json([
                'data' => $driver,
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Driver not found',
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $driver = Driver::find($id);

        if (!$driver) {
            return response()->json([
                'message' => 'Driver not found',
            ], 404);
        }

        $validated = $request->validate([
            'driver_name' => 'required|string',
            'driver_license_no' => [
                'required',
                'numeric',
                Rule::unique('drivers', 'driver_license_no')->ignore($driver->id),
            ],
            'driver_competency' => 'required|string',
        ]);

        $driver->update($validated);

        return response()->json([
            'message' => 'Driver updated successfully',
            'data' => $driver,
        ], 200);
    }


    public function destroy($id)
    {
        try {
            $driver = Driver::findOrFail($id);
            $driver->delete();
            return response()->json([
                'message' => 'Driver deleted successfully',
                'data' => Driver::all(),
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Driver not found',
            ], 404);
        }
    }
}
