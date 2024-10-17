<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseJobSafetyAnalysisPPERequest;
use App\Http\Resources\HseJobSafetyAnalysisPPEResource;
use App\Models\HseJobSafetyAnalysisPPE;
use Illuminate\Http\Request;

class HseJobSafetyAnalysisPPEController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hseJobSafetyAnalysisPPE = HseJobSafetyAnalysisPPEResource::collection(HseJobSafetyAnalysisPPE::all());
        $total = $hseJobSafetyAnalysisPPE->count();
        return response()->json([
            'data' => $hseJobSafetyAnalysisPPE,
            'total' => $total
        ]);
    }

    public function store(StoreHseJobSafetyAnalysisPPERequest $request)
    {
        $hseJobSafetyAnalysisPPE = HseJobSafetyAnalysisPPE::create($request->validated());

        return HseJobSafetyAnalysisPPEResource::make($hseJobSafetyAnalysisPPE);
    }

    /**
     * Display the specified resource.
     */
    public function show(HseJobSafetyAnalysisPPE $hseJobSafetyAnalysisPPE)
    {
        return HseJobSafetyAnalysisPPEResource::make($hseJobSafetyAnalysisPPE);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HseJobSafetyAnalysisPPE $hseJobSafetyAnalysisPPE)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HseJobSafetyAnalysisPPE $hseJobSafetyAnalysisPPE)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseJobSafetyAnalysisPPE $hseJobSafetyAnalysisPPE)
    {
        $hseJobSafetyAnalysisPPE->delete();
        $hseJobSafetyAnalysisPPE = HseJobSafetyAnalysisPPEResource::collection(HseJobSafetyAnalysisPPE::all());
        $total = $hseJobSafetyAnalysisPPE->count();
        return response()->json([
            'data' => $hseJobSafetyAnalysisPPE,
            'total' => $total
        ]);
    }
}
