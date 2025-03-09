<?php

namespace App\Http\Controllers;

use App\Models\PowerTools;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PowerToolsController extends Controller
{
    public function  index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $orderBy = $request->get('order_by', 'id');
        $sort_by = $request->get('sort_by', 'asc');

        // Base query with optional search
        $query = PowerTools::query()
            ->when($search, function ($q) use ($search) {
                $q->where(function ($q) use ($search) {
                    $q->orWhere('unit_name', 'like', "%{$search}%")
                        ->orWhere('tool_id_number', 'like', "%{$search}%")
                        ->orWhere('tool_name', 'like', "%{$search}%")
                        ->orWhere('tool_type', 'like', "%{$search}%")
                        ->orWhere('tool_manufacturer', 'like', "%{$search}%")
                        ->orWhere('tool_last_calibration_date', 'like', "%{$search}%")
                        ->orWhere('tool_last_maintenance_date', 'like', "%{$search}%")
                        ->orWhere('tool_enlistment_date', 'like', "%{$search}%")
                        ->orWhere('tool_user', 'like', "%{$search}%");
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
            'unit_name' => 'required|string',
            'tool_id_number' => 'required|string|unique:power_tools',
            'tool_name' => 'required|string',
            'tool_type' => 'required|string',
            'tool_manufacturer' => 'required|string',
            'tool_last_calibration_date' => 'required|date',
            'tool_last_maintenance_date' => 'required|date',
            'tool_enlistment_date' => 'required|date',
            'tool_user' => 'required|string',
        ]);
        $tools = PowerTools::create($validated);
        if ($tools) {
            return response()->json([
                'message' => 'Tools created successfully',
                'data' => $tools,
            ], 201);
        } else {
            return response()->json([
                'message' => 'Tools not created successfully',
            ], 500);
        }

    }

    public function show($id)
    {
        try {
            $tools = PowerTools::find($id);
            return response()->json([
                'data' => $tools,
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Tools not found',
            ], 404);
        }
    }

    public function edit($id)
    {
        try {
            $tools = PowerTools::find($id);
            return response()->json([
                'data' => $tools,
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Tools not found',
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $tools = PowerTools::find($id);

        if (!$tools) {
            return response()->json([
                'message' => 'Tools not found',
            ], 404);
        }

        $validated = $request->validate([
            'unit_name' => 'required|string',
            'tool_name' => 'required|string',
            'tool_type' => 'required|string',
            'tool_id_number' => [
                'required',
                'string',
                Rule::unique('power_tools', 'tool_id_number')->ignore($tools->id),
            ],
            'tool_manufacturer' => 'required|string',
            'tool_last_calibration_date' => 'required|date',
            'tool_last_maintenance_date' => 'required|date',
            'tool_enlistment_date' => 'required|date',
            'tool_user' => 'required|string',
        ]);

        $tools->update($validated);

        return response()->json([
            'message' => 'Tools updated successfully',
            'data' => $tools,
        ], 200);
    }


    public function destroy($id)
    {
        try {
            $tools = PowerTools::findOrFail($id);
            $tools->delete();
            return response()->json([
                'message' => 'Tools deleted successfully',
                'data' => PowerTools::all(),
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Tools not found',
            ], 404);
        }
    }
}
