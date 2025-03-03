<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unit = Unit::orderBy('id', 'desc')->get();
        $totalCount = $unit->count();
        return response()->json([
            'data' => $unit,
            'total' => $totalCount,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
            'unit_name' => 'nullable',
            'unit_location' => 'nullable',
            'organization_name' => 'nullable',
            'number_of_manpower' => 'nullable'
        ]);

        Unit::create($validated);
        $unit = Unit::orderBy('id', 'desc')->get();
        $totalCount = $unit->count();
        return response()->json([
            'data' => $unit,
            'total' => $totalCount,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $id)
    {
        $id->delete();
        $unit = Unit::orderBy('id', 'desc')->get();
        $totalCount = $unit->count();
        return response()->json([
            'data' => $unit,
            'total' => $totalCount,
        ]);
    }
}
