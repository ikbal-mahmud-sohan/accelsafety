<?php

namespace App\Http\Controllers;

use App\Models\VisitorEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VisitorEntryController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $orderBy = $request->get('order_by', 'created_at');
        $sort_by = $request->get('sort_by', 'asc');

        // Base query with optional search
        $query = VisitorEntry::query()
            ->when($search, function ($q) use ($search) {
                $q->where(function ($q) use ($search) {
                    $q->orWhere('time_of_exit', 'like', "%{$search}%")
                        ->orWhere('time_of_entry', 'like', "%{$search}%")
                        ->orWhere('temp_id_card_no', 'like', "%{$search}%")
                        ->orWhere('visit_purpose', 'like', "%{$search}%")
                        ->orWhere('whom_to_meet', 'like', "%{$search}%")
                        ->orWhere('company_name', 'like', "%{$search}%")
                        ->orWhere('visitor_name', 'like', "%{$search}%")
                        ->orWhere('unit_name', 'like', "%{$search}%");
                });
            })
            ->orderBy($orderBy, $sort_by);

        $total = $query->count();

        // Paginate results
        $data = $query->skip(($currentPage - 1) * $perPage)
            ->take($perPage)
            ->get();

        return response()->json([
            'data' => $data,
            'current_page' => $currentPage,
            'per_page' => $perPage,
            'total' => $total,
            'last_page' => ceil($total / $perPage),
            'search' => $search,
            'order_by' => $orderBy,
            'sort_by' => $sort_by,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'unit_name' => 'required|string|max:255',
            'visitor_name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'whom_to_meet' => 'required|string|max:255',
            'visit_purpose' => 'nullable|string|max:500',
            'temp_id_card_no' => 'nullable|string|max:50',
            'time_of_entry' => 'required',
            'time_of_exit' => 'nullable',
            'signature' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $imageUrl = null;

        // Store the signature file if present and get the URL
        if ($request->hasFile('signature')) {
            $path = $request->file('signature')->store('signatures', 'public');
            $imageUrl = Storage::url($path);
        }
        $validated['signature'] = $imageUrl;
        $visitors_entry = VisitorEntry::create($validated);
        return response([
            'message' => 'Visitors created successfully.',
            'data' => $visitors_entry,
        ], 201);

    }

    public function edit($id)
    {
        $visitors_entry = VisitorEntry::find($id);
        return response([
            'data' => $visitors_entry,
        ]);

    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'unit_name' => 'required|string|max:255',
            'visitor_name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'whom_to_meet' => 'required|string|max:255',
            'visit_purpose' => 'nullable|string|max:500',
            'temp_id_card_no' => 'nullable|string|max:50',
            'time_of_entry' => 'required',
            'time_of_exit' => 'nullable',
            'signature' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        // Store the signature file if present and get the URL
        if ($request->hasFile('signature')) {
            $path = $request->file('signature')->store('signatures', 'public');
            $imageUrl = Storage::url($path);
            $validated['signature'] = $imageUrl;
        }

        $visitor = VisitorEntry::find($id);
        $visitor->update($validated);
        return response([
            'message' => 'Visitors updated successfully.',
            'data' => $visitor,
        ], 200);

    }

    public function destroy($id)
    {
        $visitors = VisitorEntry::find($id);
        $visitors->delete();
        $all_visitors = VisitorEntry::all();
        return response([
            'message' => 'Visitors deleted successfully.',
            'all_visitors' => $all_visitors,
        ]);
    }
}
