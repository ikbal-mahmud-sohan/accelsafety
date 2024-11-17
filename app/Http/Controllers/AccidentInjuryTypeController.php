<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccidentInjuryTypeRequest;
use App\Http\Resources\AccidentInjuryTypeResource;
use App\Models\AccidentInjuryType;
use Illuminate\Http\Request;

class AccidentInjuryTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accidentInjuryType = AccidentInjuryTypeResource::collection(AccidentInjuryType::all());
        $totlCount = $accidentInjuryType->count();
        return response()->json([
            'data' => $accidentInjuryType,
            'total' => $totlCount,
        ]); 
    }

    public function store(StoreAccidentInjuryTypeRequest $request)
    {
        $accidentInjuryType = AccidentInjuryType::create($request->validated());
        AccidentInjuryTypeResource::make($accidentInjuryType);
        $accidentInjuryType = AccidentInjuryTypeResource::collection(AccidentInjuryType::all());
        $totlCount = $accidentInjuryType->count();
        return response()->json([
            'data' => $accidentInjuryType,
            'total' => $totlCount,
        ]); 
    }

    public function destroy(AccidentInjuryType $accidentInjuryType)
    {
        $accidentInjuryType->delete();
        $accidentInjuryTypes = AccidentInjuryTypeResource::collection(AccidentInjuryType::all());
        $totalCount = $accidentInjuryTypes->count();

        return response()->json([
            'data' => $accidentInjuryTypes,
            'total_count' => $totalCount,
        ]);
    }
}
