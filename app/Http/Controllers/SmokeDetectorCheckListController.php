<?php

namespace App\Http\Controllers;

use App\Models\SmokeDetector;
use App\Models\SmokeDetectorCheckList;
use App\Rules\UniqueCalibrationPerMonth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SmokeDetectorCheckListController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $orderBy = $request->get('order_by', 'id');
        $sort_by = $request->get('sort_by', 'asc');
        $smoke_detector_id = $request->get('smoke_detector_id', '1');

        // Base query with optional search
        $query = SmokeDetectorCheckList::where('smoke_detector_id',$smoke_detector_id)->with('smoke_detector')
            ->when($search, function ($q) use ($search) {
                $q->where(function ($q) use ($search) {
                    $q->orWhere('placement', 'like', "%{$search}%")
                        ->orWhere('power_source', 'like', "%{$search}%")
                        ->orWhere('battery_check', 'like', "%{$search}%")
                        ->orWhere('test_button', 'like', "%{$search}%")
                        ->orWhere('cleanliness', 'like', "%{$search}%")
                        ->orWhere('sensitivity', 'like', "%{$search}%")
                        ->orWhere('interconnection_with_repeater', 'like', "%{$search}%")
                        ->orWhere('last_calibration_date', 'like', "%{$search}%")
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
          'smoke_detector' => SmokeDetector::all(),
       ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'smoke_detector_id' => 'required|numeric|exists:smoke_detectors,id',
            'placement' => 'nullable|boolean',
            'power_source' => 'nullable|boolean',
            'battery_check' => 'nullable|boolean',
            'test_button' => 'nullable|boolean',
            'cleanliness' => 'nullable|boolean',
            'sensitivity' => 'nullable|boolean',
            'interconnection_with_repeater' => 'nullable|boolean',
            'last_calibration_date' => 'required|date_format:d-m-Y',
            'remarks' => 'nullable|string',
        ]);

        // Convert last_calibration_date to YYYY-MM format for comparison
        $date = Carbon::createFromFormat('d-m-Y', $validated['last_calibration_date'])->format('Y-m');

        // Check if a record already exists for the same smoke_detector_id and month
        $exists = SmokeDetectorCheckList::where('smoke_detector_id', $validated['smoke_detector_id'])
            ->whereRaw("DATE_FORMAT(last_calibration_date, '%Y-%m') = ?", [$date])
            ->exists();

        if ($exists) {
            return response()->json([
                'message' => 'A calibration record already exists for the same month.',
            ], 422);
        }

        // Store the data
        $validated['last_calibration_date'] = Carbon::createFromFormat('d-m-Y', $validated['last_calibration_date'])->format('Y-m-d');
        $data = SmokeDetectorCheckList::create($validated);

        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data,
        ], 201);
    }

    public function edit($id)
    {
        try {
            $data = SmokeDetectorCheckList::with('smoke_detector')->findOrFail($id);
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
            'smoke_detector_id' => 'required|numeric|exists:smoke_detectors,id',
            'placement' => 'nullable|boolean',
            'power_source' => 'nullable|boolean',
            'battery_check' => 'nullable|boolean',
            'test_button' => 'nullable|boolean',
            'cleanliness' => 'nullable|boolean',
            'sensitivity' => 'nullable|boolean',
            'interconnection_with_repeater' => 'nullable|boolean',
            'last_calibration_date' => 'required|date_format:d-m-Y',
            'remarks' => 'nullable|string',
        ]);

        $record = SmokeDetectorCheckList::findOrFail($id);

        // Convert last_calibration_date to YYYY-MM format for comparison
        $date = Carbon::createFromFormat('d-m-Y', $validated['last_calibration_date'])->format('Y-m');

        // Check if another record exists for the same detector and month (excluding current ID)
        $exists = SmokeDetectorCheckList::where('smoke_detector_id', $validated['smoke_detector_id'])
            ->whereRaw("DATE_FORMAT(last_calibration_date, '%Y-%m') = ?", [$date])
            ->where('id', '!=', $id) // Exclude the current record
            ->exists();

        if ($exists) {
            return response()->json([
                'message' => 'A calibration record already exists for the same month.',
            ], 422);
        }

        // Convert date format before updating
        $validated['last_calibration_date'] = Carbon::createFromFormat('d-m-Y', $validated['last_calibration_date'])->format('Y-m-d');

        // Update the record
        $record->update($validated);

        return response()->json([
            'message' => 'Data updated successfully',
            'data' => $record,
        ], 200);
    }


    public function destroy($id){
        try {
            $data=  SmokeDetectorCheckList::findOrFail($id);
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
