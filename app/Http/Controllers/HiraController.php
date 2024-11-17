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
         // Define an array of valid columns for sorting and filtering
    $validFields = [
        'id', 'process', 'activity', 'location', 'event', 'cause', 'impact', 
        'hazard_type', 'likelihood', 'impact_score', 'overall_risk_score',
        'risk_evaluation_control_type', 'risk_evaluation_effectiveness', 'risk_evaluation_likelihood',
        'risk_evaluation_impact_score', 'risk_evaluation_overall_risk_score', 'risk_evaluation_level_of_significance',
        'mitigation', 'type_of_activity','occupations','impact_rating_factors_regulatory','impact_rating_factors_safety',
        'operational_control_engineering','type_of_mitigation'
    ];

    // Get sorting parameters from the query string
    $sortBy = $request->query('sortBy', 'id'); // Default sorting by 'id'
    $sortDirection = $request->query('sortDirection', 'asc'); // Default sorting direction is 'asc'

    // Validate the sorting field
    if (!in_array($sortBy, $validFields)) {
        return response()->json([
            'message' => 'Invalid sorting field.'
        ], 400); // Bad Request response for invalid field
    }

    // Validate the sorting direction
    if (!in_array($sortDirection, ['asc', 'desc'])) {
        $sortDirection = 'asc'; // Default to 'asc' if an invalid direction is provided
    }

    // Start a query builder instance
    $query = Hira::query();

    // Apply filters dynamically based on valid fields in the request
    foreach ($validFields as $field) {
        if ($request->has($field)) {
            $query->where($field, $request->query($field));
        }
    }

    // Apply sorting
    $hira = $query->orderBy($sortBy, $sortDirection)->get();

    // Return the total count and the data
    $totalCount = $hira->count();

    return response()->json([
        'data' => HiraResource::collection($hira),
        'total_count' => $totalCount,
    ]);
    }

    public function store(StoreHiraRequest $request)
    {
        $validatedData = $request->validated();
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
