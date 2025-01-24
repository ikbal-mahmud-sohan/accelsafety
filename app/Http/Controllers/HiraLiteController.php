<?php

namespace App\Http\Controllers;

use App\Models\HiraLite;
use Illuminate\Http\Request;

class HiraLiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hiraLites = HiraLite::all();
        return response()->json($hiraLites, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // This method is not used for APIs, but you can redirect if required.
        return response()->json(['message' => 'Form rendering is not applicable for APIs'], 405);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'site_location' => 'required|string|max:255',
            'activity_or_task' => 'required|string|max:255',
            'risk_assessment_conducted_by' => 'required|string|max:255',
            'date_conducted' => 'required|string',
            'process_owner_or_department' => 'required|string|max:255',
            'next_review_date' => 'nullable|string',
            'activity' => 'required|string|max:255',
            'hazard' => 'required|string|max:255',
            'existing_control_measures' => 'required|string|max:255',
            'risk_rating_likelihood' => 'required|string|max:255',
            'risk_rating_severity' => 'required|string|max:255',
            'risk_rating_overall' => 'required|string|max:255',
            'additional_control_measures' => 'nullable|string',
            'revised_risk_rating_likelihood' => 'required|string|max:255',
            'revised_risk_rating_severity' => 'required|string|max:255',
            'revised_risk_rating_overall' => 'required|string|max:255',
            'person_responsible' => 'required|string|max:255',
            'completion_date' => 'required|string',
            // 'approved_by' => 'required|string|max:255',
            // 'approved_by_signature' => 'nullable|json',
        ]);

        $hiraLite = HiraLite::create($validatedData);

        return response()->json($hiraLite, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(HiraLite $hiraLite)
    {
        return response()->json($hiraLite, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HiraLite $hiraLite)
    {
        // This method is not used for APIs, but you can redirect if required.
        return response()->json(['message' => 'Form rendering is not applicable for APIs'], 405);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HiraLite $hiraLite)
    {
        $validatedData = $request->validate([
            'site_location' => 'sometimes|required|string|max:255',
            'activity_or_task' => 'sometimes|required|string|max:255',
            'risk_assessment_conducted_by' => 'sometimes|required|string|max:255',
            'date_conducted' => 'sometimes|required|date',
            'process_owner_or_department' => 'sometimes|required|string|max:255',
            'next_review_date' => 'nullable|date',
            'activity' => 'sometimes|required|string|max:255',
            'hazard' => 'sometimes|required|string|max:255',
            'existing_control_measures' => 'sometimes|required|string|max:255',
            'risk_rating_likelihood' => 'sometimes|required|string|max:255',
            'risk_rating_severity' => 'sometimes|required|string|max:255',
            'risk_rating_overall' => 'sometimes|required|string|max:255',
            'additional_control_measures' => 'nullable|string',
            'revised_risk_rating_likelihood' => 'sometimes|required|string|max:255',
            'revised_risk_rating_severity' => 'sometimes|required|string|max:255',
            'revised_risk_rating_overall' => 'sometimes|required|string|max:255',
            'person_responsible' => 'sometimes|required|string|max:255',
            'completion_date' => 'sometimes|required|date',
            // 'approved_by' => 'sometimes|required|string|max:255',
            // 'approved_by_signature' => 'nullable|json',
        ]);

        $hiraLite->update($validatedData);

        return response()->json($hiraLite, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HiraLite $hiraLite)
    {
        $hiraLite->delete();

        return response()->json(['message' => 'Resource deleted successfully'], 200);
    }
}
