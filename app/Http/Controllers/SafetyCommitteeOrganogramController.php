<?php

namespace App\Http\Controllers;

use App\Models\SafetyCommitteeOrganogram;
use Illuminate\Http\Request;

class SafetyCommitteeOrganogramController extends Controller
{
    public function  index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $orderBy = $request->get('order_by', 'id');
        $sort_by = $request->get('sort_by', 'asc');

        // Base query with optional search
        $query = SafetyCommitteeOrganogram::query()
            ->when($search, function ($q) use ($search) {
                $q->where(function ($q) use ($search) {
                    $q->orWhere('name', 'like', "%{$search}%")
                        ->orWhere('position', 'like', "%{$search}%")
                        ->orWhere('additional_name', 'like', "%{$search}%");

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
            'name' => 'required|string',
            'position' => 'required|string',
            'additional_name' => 'required|string',
        ]);
        $committee = SafetyCommitteeOrganogram::create($validated);
        if ($committee) {
            return response()->json([
                'message' => 'Safety Committee created successfully',
                'data' => $committee,
            ], 201);
        } else {
            return response()->json([
                'message' => 'Safety Committee not created successfully',
            ], 500);
        }

    }

    public function show($id)
    {
        try {
            $committee = SafetyCommitteeOrganogram::find($id);
            return response()->json([
                'data' => $committee,
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Safety Committee not found',
            ], 404);
        }
    }

    public function edit($id)
    {
        try {
            $committee = SafetyCommitteeOrganogram::find($id);
            return response()->json([
                'data' => $committee,
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Safety Committee not found',
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $committee = SafetyCommitteeOrganogram::find($id);

        if (!$committee) {
            return response()->json([
                'message' => 'Safety Committee not found',
            ], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'additional_name' => 'required|string',
        ]);

        $committee->update($validated);

        return response()->json([
            'message' => 'Safety Committee updated successfully',
            'data' => $committee,
        ], 200);
    }


    public function destroy($id)
    {
        try {
            $committee = SafetyCommitteeOrganogram::findOrFail($id);
            $committee->delete();
            return response()->json([
                'message' => 'Safety Committee deleted successfully',
                'data' => SafetyCommitteeOrganogram::all(),
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Safety Committee not found',
            ], 404);
        }
    }
}
