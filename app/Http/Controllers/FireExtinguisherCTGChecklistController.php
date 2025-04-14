<?php

namespace App\Http\Controllers;

use App\Models\FireExtinguisherCTG;
use App\Models\FireExtinguisherCTGChecklist;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FireExtinguisherCTGChecklistController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $orderBy = $request->get('order_by', 'id');
        $sort_by = $request->get('sort_by', 'asc');
        $fire_extinguisher_ctg_id = $request->get('fire_extinguisher_ctg_id', 'asc');

        // Base query with optional search
        $query = FireExtinguisherCTGChecklist::where('fire_extinguisher_ctg_id',$fire_extinguisher_ctg_id)->with('fire_extinguisher_ctg')
            ->when($search, function ($q) use ($search) {
                $q->where(function ($q) use ($search) {
                    $q->orWhere('fe_pressure_gauge_condition', 'like', "%{$search}%")
                        ->orWhere('placed_in_position', 'like', "%{$search}%")
                        ->orWhere('safety_seal_or_pin', 'like', "%{$search}%")
                        ->orWhere('handle_trigger_condition', 'like', "%{$search}%")
                        ->orWhere('hose_connection_secured_belt', 'like', "%{$search}%")
                        ->orWhere('name_plate_and_operating_instruction', 'like', "%{$search}%")
                        ->orWhere('physical_damage', 'like', "%{$search}%")
                        ->orWhere('corrosion', 'like', "%{$search}%")
                        ->orWhere('leakage', 'like', "%{$search}%")
                        ->orWhere('refilling_date', 'like', "%{$search}%")
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
            'fire_extinguisher_ctg' => FireExtinguisherCTG::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fire_extinguisher_ctg_id' => 'required|numeric|exists:fire_extinguisher_c_t_g_s,id',
            'fe_pressure_gauge_condition'=> 'nullable|boolean',
            'placed_in_position'=> 'nullable|boolean',
            'safety_seal_or_pin'=> 'nullable|boolean',
            'handle_trigger_condition'=> 'nullable|boolean',
            'hose_connection_secured_belt'=> 'nullable|boolean',
            'name_plate_and_operating_instruction'=> 'nullable|boolean',
            'physical_damage'=> 'nullable|boolean',
            'corrosion'=> 'nullable|boolean',
            'leakage'=> 'nullable|boolean',
            'refilling_date'=> 'required|date_format:d-m-Y',
            'remarks'=> 'nullable|string',
        ]);

        // Convert refilling_date to YYYY-MM format for comparison
        $date = Carbon::createFromFormat('d-m-Y', $validated['refilling_date'])->format('Y-m');

        // Check if a record already exists for the same fire_extinguisher_ctg_id and month
        $exists = FireExtinguisherCTGChecklist::where('fire_extinguisher_ctg_id', $validated['fire_extinguisher_ctg_id'])
            ->whereRaw("DATE_FORMAT(refilling_date, '%Y-%m') = ?", [$date])
            ->exists();

        if ($exists) {
            return response()->json([
                'message' => 'A record already exists for this smoke detector in the same month.',
            ], 422);
        }

        // Store the data
        $validated['refilling_date'] = Carbon::createFromFormat('d-m-Y', $validated['refilling_date'])->format('Y-m-d');
        $data = FireExtinguisherCTGChecklist::create($validated);

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data,
        ], 201);
    }

    public function edit($id)
    {
        try {
            $data = FireExtinguisherCTGChecklist::with('fire_extinguisher_ctg')->findOrFail($id);
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
            'fire_extinguisher_ctg_id' => 'required|numeric|exists:fire_extinguisher_c_t_g_s,id',
            'fe_pressure_gauge_condition'=> 'nullable|boolean',
            'placed_in_position'=> 'nullable|boolean',
            'safety_seal_or_pin'=> 'nullable|boolean',
            'handle_trigger_condition'=> 'nullable|boolean',
            'hose_connection_secured_belt'=> 'nullable|boolean',
            'name_plate_and_operating_instruction'=> 'nullable|boolean',
            'physical_damage'=> 'nullable|boolean',
            'corrosion'=> 'nullable|boolean',
            'leakage'=> 'nullable|boolean',
            'refilling_date'=> 'required|date_format:d-m-Y',
            'remarks'=> 'nullable|string',
        ]);

        $record = FireExtinguisherCTGChecklist::findOrFail($id);

        // Convert refilling_date to YYYY-MM format for comparison
        $date = Carbon::createFromFormat('d-m-Y', $validated['refilling_date'])->format('Y-m');

        // Check if another record exists for the same detector and month (excluding current ID)
        $exists = FireExtinguisherCTGChecklist::where('fire_extinguisher_ctg_id', $validated['fire_extinguisher_ctg_id'])
            ->whereRaw("DATE_FORMAT(refilling_date, '%Y-%m') = ?", [$date])
            ->where('id', '!=', $id) // Exclude the current record
            ->exists();

        if ($exists) {
            return response()->json([
                'message' => 'A calibration record already exists for the same month.',
            ], 422);
        }

        // Convert date format before updating
        $validated['refilling_date'] = Carbon::createFromFormat('d-m-Y', $validated['refilling_date'])->format('Y-m-d');

        // Update the record
        $record->update($validated);

        return response()->json([
            'message' => 'Data updated successfully',
            'data' => $record,
        ], 200);
    }


    public function destroy($id){
        try {
            $data=  FireExtinguisherCTGChecklist::findOrFail($id);
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
