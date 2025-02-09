<?php

namespace App\Http\Controllers;

use App\Models\AccelSafetyWord;
use Illuminate\Http\Request;

class AccelSafetyWordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $safetyWords = AccelSafetyWord::all();
        return response()->json($safetyWords);
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
