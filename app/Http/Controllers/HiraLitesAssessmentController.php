<?php

namespace App\Http\Controllers;

use App\Models\HiraLitesAssessment;
use Illuminate\Http\Request;

class HiraLitesAssessmentController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $orderBy = $request->get('order_by', 'date_conducted');
        $sort_by = $request->get('sort_by', 'asc');

        // Base query with optional search
        $query = HiraLitesAssessment::query()
            ->when($search, function ($q) use ($search) {
                $q->where(function ($q) use ($search) {
                    $q->where('site_location', 'like', "%{$search}%")
                        ->orWhere('activity_or_task', 'like', "%{$search}%")
                        ->orWhere('risk_assessment_conducted_by', 'like', "%{$search}%")
                        ->orWhere('process_owner_or_department', 'like', "%{$search}%")
                        ->orWhere('date_conducted', 'like', "%{$search}%")
                        ->orWhere('next_review_date', 'like', "%{$search}%");
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
            'site_location' => 'nullable|string|max:255',
            'activity_or_task' => 'nullable|string|max:255',
            'risk_assessment_conducted_by' => 'nullable|string|max:255',
            'date_conducted' => 'nullable|string',
            'process_owner_or_department' => 'nullable|string|max:255',
            'next_review_date' => 'nullable|string'
        ]);

        $hiraLiteAssessment = HiraLitesAssessment::create($validatedData);

        return response()->json($hiraLiteAssessment, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(HiraLitesAssessment $hiraLitesAssessment)
    {
        return response()->json($hiraLitesAssessment, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HiraLitesAssessment $hiraLitesAssessment)
    {
        // This method is not used for APIs, but you can redirect if required.
        return response()->json(['message' => 'Form rendering is not applicable for APIs'], 405);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HiraLitesAssessment $hiraLitesAssessment)
    {
        $validatedData = $request->validate([
            'site_location' => 'sometimes|required|string|max:255',
            'activity_or_task' => 'sometimes|required|string|max:255',
            'risk_assessment_conducted_by' => 'sometimes|required|string|max:255',
            'date_conducted' => 'sometimes|required|date',
            'process_owner_or_department' => 'sometimes|required|string|max:255',
            'next_review_date' => 'nullable|date'

        ]);

        $hiraLitesAssessment->update($validatedData);

        return response()->json($hiraLitesAssessment, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HiraLitesAssessment $hiraLitesAssessment)
    {
        $hiraLitesAssessment->delete();
        $hiraLites = HiraLitesAssessment::all();
        return response()->json($hiraLites, 200);
    }
}
