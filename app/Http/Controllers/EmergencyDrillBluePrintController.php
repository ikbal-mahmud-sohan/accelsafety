<?php

namespace App\Http\Controllers;

use App\Models\EmergencyDrillBluePrint;
use App\Models\FirstAidChecklist;
use Illuminate\Http\Request;

class EmergencyDrillBluePrintController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $orderBy = $request->get('order_by', 'id');
        $sort_by = $request->get('sort_by', 'asc');

        // Base query with optional search
        $query = EmergencyDrillBluePrint::query()
            ->when($search, function ($q) use ($search) {
                $q->orWhere('date', 'like', "%{$search}%")
                    ->orWhere('time', 'like', "%{$search}%")
                    ->orWhere('title', 'like', "%{$search}%")
                    ->orWhere('emergency_simulation', 'like', "%{$search}%")
                    ->orWhere('location', 'like', "%{$search}%")
                    ->orWhere('fire_scenario', 'like', "%{$search}%")
                    ->orWhere('incident_initiator', 'like', "%{$search}%")
                    ->orWhere('emergency_communication', 'like', "%{$search}%")
                    ->orWhere('observers', 'like', "%{$search}%");
            })
            ->orderBy($orderBy, $sort_by);

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
            'date' => 'nullable|string',
            'time' => 'nullable|string',
            'title' => 'nullable|string',
            'emergency_simulation' => 'nullable|string',
            'location' => 'nullable|string',
            'incident_initiator' => 'nullable|string',
            'emergency_communication' => 'nullable|string',
            'observers' => 'nullable|string',
            'location_data' => 'nullable|array',
            'fire_scenario' => 'nullable|string',
            'site_main_controller_responsibility' => 'nullable|string',
            'site_incident_controller_responsibility' => 'nullable|string',
            'emergency_response_team_responsibility' => 'nullable|string',
            'employees_responsibility' => 'nullable|string',
        ]);

        $data = EmergencyDrillBluePrint::create($validated);

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data,
        ], 201);
    }


    public function edit($id)
    {
        try {
            $data = EmergencyDrillBluePrint::findOrFail($id);
            return response()->json([
                'data' => $data,
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Data not found',
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'date' => 'nullable|string',
            'time' => 'nullable|string',
            'title' => 'nullable|string',
            'emergency_simulation' => 'nullable|string',
            'location' => 'nullable|string',
            'incident_initiator' => 'nullable|string',
            'emergency_communication' => 'nullable|string',
            'observers' => 'nullable|string',
            'location_data' => 'nullable|array',
            'fire_scenario' => 'nullable|string',
            'site_main_controller_responsibility' => 'nullable|string',
            'site_incident_controller_responsibility' => 'nullable|string',
            'emergency_response_team_responsibility' => 'nullable|string',
            'employees_responsibility' => 'nullable|string',
        ]);

        try {
            $data = EmergencyDrillBluePrint::findOrFail($id);
            $data->update($validated);
            return response()->json([
                'message' => 'Data updated successfully',
                'data' => $data,
            ], 201);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'error' => 'Data not found',
            ], 404);
        }
    }

    public function destroy($id){
        try {
            $data=  EmergencyDrillBluePrint::findOrFail($id);
            $data->delete();
            return response()->json([
                'message' => 'Data deleted successfully',
            ]);
        }catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e){
            return response()->json([
                'error' => 'Data not found',
            ]);
        }
    }
}
