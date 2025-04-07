<?php

namespace App\Http\Controllers;

use App\Models\FirstAidChecklist;
use Illuminate\Http\Request;

class FirstAidChecklistController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $orderBy = $request->get('order_by', 'id');
        $sort_by = $request->get('sort_by', 'asc');

        // Base query with optional search
        $query = FirstAidChecklist::query()
            ->when($search, function ($q) use ($search) {
                $q->where(function ($q) use ($search) {
                    $q->orWhere('box_no', 'like', "%{$search}%")
                        ->orWhere('location', 'like', "%{$search}%")
                        ->orWhere('contact_no', 'like', "%{$search}%")
                        ->orWhere('authorized_person', 'like', "%{$search}%");
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
            'box_no' => 'required',
            'location' => 'nullable',
            'authorized_person' => 'required',
            'contact_no' => 'nullable',
            'reference' => 'nullable',
            'data' => 'array|nullable',
        ]);

        $data = FirstAidChecklist::create($validated);
        return response()->json([
            'message' => 'Data created successfully',
            'data' => $data,
        ], 201);

    }

    public function edit($id)
    {
        try {
            $data = FirstAidChecklist::findOrFail($id);
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
            'box_no' => 'required',
            'location' => 'nullable',
            'authorized_person' => 'required',
            'contact_no' => 'nullable',
            'reference' => 'nullable',
            'data' => 'array|nullable',
        ]);

        try {
            $data = FirstAidChecklist::findOrFail($id);
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
            $data=  FirstAidChecklist::findOrFail($id);
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
