<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHiraRequest;
use App\Http\Resources\HiraResource;
use App\Models\Hira;
use Illuminate\Http\Request;

class HiraController extends Controller
{

    public function index(Request $request)
    {
        // Define an array of valid columns for sorting, searching, and filtering
        $validFields = [
            'id', 'process', 'activity', 'location', 'event', 'cause', 'impact',
            'hazard_type', 'likelihood', 'impact_score', 'overall_risk_score',
            'risk_evaluation_control_type', 'risk_evaluation_effectiveness', 'risk_evaluation_likelihood',
            'risk_evaluation_impact_score', 'risk_evaluation_overall_risk_score', 'risk_evaluation_level_of_significance',
            'mitigation', 'type_of_activity', 'occupations', 'impact_rating_factors_regulatory',
            'impact_rating_factors_safety', 'operational_control_engineering', 'type_of_mitigation'
        ];

        // Pagination parameters
        $perPage = $request->query('per_page', 10);
        $currentPage = $request->query('current_page', 1);

        // Sorting parameters
        $orderBy = $request->query('order_by', 'id');
        $sortBy = $request->query('sort_by', 'asc');

        // Search parameter
        $search = $request->query('param', '');

        // Validate the sorting field
        if (!in_array($orderBy, $validFields)) {
            return response()->json([
                'message' => 'Invalid order_by field.'
            ], 400);
        }

        // Validate sorting direction
        if (!in_array(strtolower($sortBy), ['asc', 'desc'])) {
            $sortBy = 'asc';
        }

        // Start query
        $query = Hira::query();

        // Apply search across all valid fields if 'param' is provided
        if (!empty($search)) {
            $query->where(function ($q) use ($search, $validFields) {
                foreach ($validFields as $field) {
                    $q->orWhere($field, 'like', "%{$search}%");
                }
            });
        }

        // Dynamic filtering based on request parameters
        foreach ($validFields as $field) {
            if ($request->has($field)) {
                $query->where($field, $request->query($field));
            }
        }

        // Apply sorting
        $query->orderBy($orderBy, $sortBy);

        // Get paginated results
        $hira = $query->paginate($perPage, ['*'], 'page', $currentPage);

        return response()->json([
            'current_page' => $hira->currentPage(),
            'per_page' => $hira->perPage(),
            'total' => $hira->total(),
            'last_page' => $hira->lastPage(),
            'data' => HiraResource::collection($hira),
        ]);
    }


    public function store(StoreHiraRequest $request)
    {
        $request->validate([
            'impact_score'=>'numeric|nullable',
            'likelihood'=>'numeric|nullable',
            'risk_evaluation_likelihood'=>'numeric|nullable',
            'risk_evaluation_impact_score'=>'numeric|nullable',
            'risk_evaluation_overall_risk_score'=>'numeric|nullable',
        ]);
        $validatedData =$request->validated();
        $validatedData['operational_control_elimination'] = isset($validatedData['operational_control_elimination']) ? $validatedData['operational_control_elimination']: null;
        $validatedData['operational_control_substitution'] = isset($validatedData['operational_control_substitution']) ? $validatedData['operational_control_substitution'] : null;
        $validatedData['operational_control_engineering'] = isset($validatedData['operational_control_engineering']) ? $validatedData['operational_control_engineering'] : null;
        $validatedData['operational_control_administrative'] = isset($validatedData['operational_control_administrative']) ? $validatedData['operational_control_administrative'] : null;
        $validatedData['ppe'] = isset($validatedData['ppe']) ? $validatedData['ppe'] : null;
        $validatedData['sub_activity'] = isset($validatedData['sub_activity']) ? $validatedData['sub_activity'] : null;

        $hira = Hira::create($validatedData);
        return new HiraResource($hira);
    }

    public function destroy(Hira $hira)
    {
        $hira->delete();
        $hira = HiraResource::collection(Hira::all());
        $totalCount = $hira->count();
        return response()->json([
            'data' => $hira,
            'total_count' => $totalCount,
        ]);
    }
}
