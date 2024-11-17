<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccidentMonthRequest;
use App\Http\Resources\AccidentMonthResource;
use App\Models\AccidentMonth;
use Illuminate\Http\Request;

class AccidentMonthController extends Controller
{
    
    public function index()
    {
        $accidentMonth = AccidentMonthResource::collection(AccidentMonth::all());
        $totlCount = $accidentMonth->count();
        return response()->json([
            'data' => $accidentMonth,
            'total' => $totlCount,
        ]); 
    }

    public function store(StoreAccidentMonthRequest $request)
    {
        $accidentMonth = AccidentMonth::create($request->validated());
        AccidentMonthResource::make($accidentMonth);
        $accidentMonth = AccidentMonthResource::collection(AccidentMonth::all());
        $totlCount = $accidentMonth->count();
        return response()->json([
            'data' => $accidentMonth,
            'total' => $totlCount,
        ]); 
    }

    public function destroy(AccidentMonth $accidentMonth)
    {
        $accidentMonth->delete();
        $accidentMonths = AccidentMonthResource::collection(AccidentMonth::all());
        $totalCount = $accidentMonths->count();

        return response()->json([
            'data' => $accidentMonths,
            'total_count' => $totalCount,
        ]);
    }
}
