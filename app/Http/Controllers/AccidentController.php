<?php

namespace App\Http\Controllers;

use App\Models\Accident;
use Illuminate\Http\Request;

class AccidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accident = Accident::all();
        $totalCount = $accident->count();
        return response()->json([
            'data' => $accident,
            'total_count' => $totalCount,
        ]);

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'month' => 'required|string|max:255',
            'date' => 'required|date',
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'supervisor' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'type_of_accident' => 'required|string|max:255',
            'description' => 'required|string',
            'zone_location' => 'required|string|max:255',
            'precise_location' => 'required|string|max:255',
            'injury_type' => 'required|string|max:255',
            'affected_body_parts' => 'required|string|max:255',
            'property_damaged' => 'required|boolean',
            'root_cause' => 'required|string',
            'action' => 'required|string',
            'days_lost' => 'required|integer',
            'remarks' => 'nullable|string',
            'type_of_victim_employee' => 'required|string|max:255',
            'responsible_name' => 'required|string|max:255',
            'deadline' => 'required|date',
            'status' => 'required|boolean'
        ]);
    
        // Create the accident record
        $accidentVal = Accident::create($validatedData);
        $accident = Accident::create($accidentVal);
        
        return response()->json($accident, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Accident $accident)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accident $accident)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accident $accident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accident $accident)
    {
        //
    }
}
