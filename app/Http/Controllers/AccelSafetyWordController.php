<?php

namespace App\Http\Controllers;

use App\Models\AccelSafetyWord;
use Illuminate\Http\Request;

class AccelSafetyWordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);          // Items per page (default: 10)
        $currentPage = $request->get('current_page', 1);   // Current page (default: 1)
        $search = $request->get('search', '');             // Search term (default: '')
        $sortBy = $request->get('order_by', 'id');         // Sort field (default: 'id')
        $sortOrder = $request->get('sort_by', 'asc');      // Sort order (default: 'asc')

        $validSortFields = ['id', 'number', 'version', 'title', 'records_date', 'descriptions', 'created_at', 'updated_at'];
        $sortBy = in_array($sortBy, $validSortFields) ? $sortBy : 'id';  // Validate sort field

        //  Base query
        $query = AccelSafetyWord::query();

        //  Search functionality
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('number', 'like', "%$search%")
                    ->orWhere('version', 'like', "%$search%")
                    ->orWhere('title', 'like', "%$search%")
                    ->orWhere('records_date', 'like', "%$search%")
                    ->orWhere('descriptions', 'like', "%$search%");
            });
        }

        //  Sorting
        $query->orderBy($sortBy, $sortOrder);

        //  Pagination
        $total = $query->count();
        $safetyWords = $query->skip(($currentPage - 1) * $perPage)->take($perPage)->get();

        //  JSON response
        return response()->json([
            'total_count' => $total,
            'current_page' => $currentPage,
            'per_page' => $perPage,
            'last_page' => ceil($total / $perPage),
            'data' => $safetyWords,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'number' => 'required|integer',
            'version' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'records_date' => 'nullable',
            'descriptions' => 'required|string',
        ]);

        $safetyWord = AccelSafetyWord::create($validatedData);

        return response()->json(['message' => 'Safety word created successfully!', 'data' => $safetyWord], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(AccelSafetyWord $accelSafetyWord)
    {
        return response()->json($accelSafetyWord);
    }

    public function update(Request $request, AccelSafetyWord $accelSafetyWord)
    {
        $validatedData = $request->validate([
            'number' => 'required|integer',
            'version' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'records_date' => 'nullable',
            'descriptions' => 'required|string',
        ]);

        $accelSafetyWord->update($validatedData);

        return response()->json(['message' => 'Safety word updated successfully!', 'data' => $accelSafetyWord]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AccelSafetyWord $accelSafetyWord)
    {
        $accelSafetyWord->delete();

        $safetyWords = AccelSafetyWord::all();
        return response()->json($safetyWords);
    }
}
