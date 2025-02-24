<?php

namespace App\Http\Controllers;

use App\Models\HiraLite;
use Illuminate\Http\Request;

class HiraLiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $orderBy = $request->get('order_by', 'risk_rating_overall');
        $sort_by = $request->get('sort_by', 'asc');

        // Base query with optional search
        $query = HiraLite::query()
            ->with('hiraLiteAssessment')
            ->when($search, function ($q) use ($search) {
                $q->where(function ($q) use ($search) {
                    $q->orWhere('activity', 'like', "%{$search}%")
                        ->orWhere('hazard', 'like', "%{$search}%")
                        ->orWhere('existing_control_measures', 'like', "%{$search}%")
                        ->orWhere('risk_rating_likelihood', 'like', "%{$search}%")
                        ->orWhere('risk_rating_severity', 'like', "%{$search}%")
                        ->orWhere('risk_rating_overall', 'like', "%{$search}%")
                        ->orWhere('additional_control_measures', 'like', "%{$search}%")
                        ->orWhere('revised_risk_rating_likelihood', 'like', "%{$search}%")
                        ->orWhere('revised_risk_rating_severity', 'like', "%{$search}%")
                        ->orWhere('revised_risk_rating_overall', 'like', "%{$search}%")
                        ->orWhere('person_responsible', 'like', "%{$search}%");
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

            'hira_lites_assessment_id' => 'required|numeric|exists:hira_lites_assessments,id',
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
            'hira_lites_assessment_id' => 'required|numeric|exists:hira_lites_assessments,id',
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
        $hiraLites = HiraLite::all();
        return response()->json($hiraLites, 200);
    }
    public function getHiraLiteData()
    {
        return response()->json([
            'activities' => HiraLite::pluck('activity')->unique()->toArray(),
            'hazards' => HiraLite::pluck('hazard')->unique()->toArray(),
            'existing_control_measures' => HiraLite::pluck('existing_control_measures')->unique()->toArray(),
            'persons_responsible' => HiraLite::pluck('person_responsible')->unique()->toArray(),
            'additionals_control_measures' => HiraLite::pluck('additional_control_measures')->unique()->toArray(),
        ]);
    }
}
