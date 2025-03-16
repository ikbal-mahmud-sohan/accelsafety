<?php

namespace App\Http\Controllers;

use App\Models\FireExtiguisherTEJ;
use Illuminate\Http\Request;

class FireExtiguisherTEJController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $orderBy = $request->get('order_by', 'id');
        $sort_by = $request->get('sort_by', 'asc');

        // Base query with optional search
        $query = FireExtiguisherTEJ::query()
            ->when($search, function ($q) use ($search) {
                $q->where(function ($q) use ($search) {
                    $q->orWhere('tag_no', 'like', "%{$search}%")
                        ->orWhere('type', 'like', "%{$search}%")
                        ->orWhere('location', 'like', "%{$search}%");
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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tag_no' => 'required|unique:fire_extiguisher_t_e_j_s,tag_no',
            'type' => 'required',
            'location' => 'required',
        ]);

        $data = FireExtiguisherTEJ::create($validated);
        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data,
        ], 201);

    }

    public function edit($id)
    {
        try {
            $data = FireExtiguisherTEJ::findOrFail($id);
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
            'tag_no' => 'required|unique:fire_extiguisher_t_e_j_s,tag_no,' . $id,
            'type' => 'required',
            'location' => 'required',
        ]);
        try {
            $data = FireExtiguisherTEJ::findOrFail($id);
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
            $data=  FireExtiguisherTEJ::findOrFail($id);
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
