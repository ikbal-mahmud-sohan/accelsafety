<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccidentTypeRequest;
use App\Http\Resources\AccidentTypeResource;
use App\Models\AccidentType;
use Illuminate\Http\Request;

class AccidentTypeController extends Controller
{
    
    public function index()
    {
        $accidentMonth = AccidentTypeResource::collection(AccidentType::all());
        $totlCount = $accidentMonth->count();
        return response()->json([
            'data' => $accidentMonth,
            'total' => $totlCount,
        ]); 
    }

    public function store(StoreAccidentTypeRequest $request)
    {
        $accidentType = AccidentType::create($request->validated());
        AccidentTypeResource::make($accidentType);
        
        $accidentMonth = AccidentTypeResource::collection(AccidentType::all());
        $totlCount = $accidentMonth->count();
        return response()->json([
            'data' => $accidentMonth,
            'total' => $totlCount,
        ]); 
    }

    public function destroy(AccidentType $accidentType)
    {
        $accidentType->delete();
        $accidentTypes = AccidentTypeResource::collection(AccidentType::all());
        $totalCount = $accidentTypes->count();

        return response()->json([
            'data' => $accidentTypes,
            'total_count' => $totalCount,
        ]);
    }
}
