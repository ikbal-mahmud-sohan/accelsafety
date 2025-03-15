<?php

namespace App\Http\Controllers;

use App\Models\EmergencyAlarmAudible;
use App\Models\EmergencyAlarmAudibleChecklist;
use App\Models\SmokeDetector;
use App\Models\SmokeDetectorCheckList;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmergencyAlarmAudibleChecklistController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $orderBy = $request->get('order_by', 'id');
        $sort_by = $request->get('sort_by', 'asc');

        // Base query with optional search
        $query = EmergencyAlarmAudibleChecklist::with('emergency_alarm_audible')
            ->when($search, function ($q) use ($search) {
                $q->where(function ($q) use ($search) {
                    $q->orWhere('sound_condition', 'like', "%{$search}%")
                        ->orWhere('make_of_position', 'like', "%{$search}%")
                        ->orWhere('alarm_sensor', 'like', "%{$search}%")
                        ->orWhere('battery_backup_condition', 'like', "%{$search}%")
                        ->orWhere('record_of_alarm', 'like', "%{$search}%")
                        ->orWhere('name_plate_and_operating_instruction', 'like', "%{$search}%")
                        ->orWhere('physical_damage', 'like', "%{$search}%")
                        ->orWhere('last_maintenance_date', 'like', "%{$search}%")
                        ->orWhere('remarks', 'like', "%{$search}%");
                });
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

    public function create()
    {
        return response()->json([
            'emergency_alarm_audible' => EmergencyAlarmAudible::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'emergency_alarm_audible_id' => 'required|numeric|exists:emergency_alarm_audibles,id',
            'sound_condition' => 'nullable|boolean',
            'make_of_position' => 'nullable|boolean',
            'alarm_sensor' => 'nullable|boolean',
            'battery_backup_condition' => 'nullable|boolean',
            'record_of_alarm' => 'nullable|boolean',
            'name_plate_and_operating_instruction' => 'nullable|boolean',
            'physical_damage' => 'nullable|boolean',
            'last_maintenance_date' => 'required|date_format:d-m-Y',
            'remarks' => 'nullable|string',
        ]);

        // Convert last_maintenance_date to YYYY-MM format for comparison
        $date = Carbon::createFromFormat('d-m-Y', $validated['last_maintenance_date'])->format('Y-m');

        // Check if a record already exists for the same emergency_alarm_audible_id and month
        $exists = EmergencyAlarmAudibleChecklist::where('emergency_alarm_audible_id', $validated['emergency_alarm_audible_id'])
            ->whereRaw("DATE_FORMAT(last_maintenance_date, '%Y-%m') = ?", [$date])
            ->exists();

        if ($exists) {
            return response()->json([
                'message' => 'A record already exists for this smoke detector in the same month.',
            ], 422);
        }

        // Store the data
        $validated['last_maintenance_date'] = Carbon::createFromFormat('d-m-Y', $validated['last_maintenance_date'])->format('Y-m-d');
        $data = EmergencyAlarmAudibleChecklist::create($validated);

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data,
        ], 201);
    }

    public function edit($id)
    {
        try {
            $data = EmergencyAlarmAudibleChecklist::with('emergency_alarm_audible')->findOrFail($id);
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
            'emergency_alarm_audible_id' => 'required|numeric|exists:emergency_alarm_audibles,id',
            'sound_condition' => 'nullable|boolean',
            'make_of_position' => 'nullable|boolean',
            'alarm_sensor' => 'nullable|boolean',
            'battery_backup_condition' => 'nullable|boolean',
            'record_of_alarm' => 'nullable|boolean',
            'name_plate_and_operating_instruction' => 'nullable|boolean',
            'physical_damage' => 'nullable|boolean',
            'last_maintenance_date' => 'required|date_format:d-m-Y',
            'remarks' => 'nullable|string',
        ]);

        $record = EmergencyAlarmAudibleChecklist::findOrFail($id);

        // Convert last_maintenance_date to YYYY-MM format for comparison
        $date = Carbon::createFromFormat('d-m-Y', $validated['last_maintenance_date'])->format('Y-m');

        // Check if another record exists for the same detector and month (excluding current ID)
        $exists = EmergencyAlarmAudibleChecklist::where('emergency_alarm_audible_id', $validated['emergency_alarm_audible_id'])
            ->whereRaw("DATE_FORMAT(last_maintenance_date, '%Y-%m') = ?", [$date])
            ->where('id', '!=', $id) // Exclude the current record
            ->exists();

        if ($exists) {
            return response()->json([
                'message' => 'A calibration record already exists for this smoke detector in the same month.',
            ], 422);
        }

        // Convert date format before updating
        $validated['last_maintenance_date'] = Carbon::createFromFormat('d-m-Y', $validated['last_maintenance_date'])->format('Y-m-d');

        // Update the record
        $record->update($validated);

        return response()->json([
            'message' => 'Data updated successfully',
            'data' => $record,
        ], 200);
    }


    public function destroy($id){
        try {
            $data=  EmergencyAlarmAudibleChecklist::findOrFail($id);
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
