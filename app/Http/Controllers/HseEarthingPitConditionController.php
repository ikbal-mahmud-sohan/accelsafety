<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseEarthingPitConditionRequest;
use App\Http\Resources\HseEarthingPitConditionResource;
use App\Models\HseEarthingPitCondition;
use Illuminate\Http\Request;

class HseEarthingPitConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $hseEarthingPitCondition = HseEarthingPitConditionResource::collection(HseEarthingPitCondition::all());
       $total = $hseEarthingPitCondition->count();
        return response()->json([
            'data' => $hseEarthingPitCondition,
            'total' => $total,
        ]);
    }

    public function store(StoreHseEarthingPitConditionRequest $request)
    {
        $hseEarthingPitCondition = HseEarthingPitCondition::create($request->validated());
        return new HseEarthingPitConditionResource($hseEarthingPitCondition);
    }

    /**
     * Display the specified resource.
     */
    public function show(HseEarthingPitCondition $hseEarthingPitCondition)
    {
        return HseEarthingPitConditionResource::make($hseEarthingPitCondition);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HseEarthingPitCondition $hseEarthingPitCondition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HseEarthingPitCondition $hseEarthingPitCondition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseEarthingPitCondition $hseEarthingPitCondition)
    {
        $hseEarthingPitCondition->delete();
        $hseEarthingPitCondition = HseEarthingPitConditionResource::collection(HseEarthingPitCondition::all());
       $total = $hseEarthingPitCondition->count();
        return response()->json([
            'data' => $hseEarthingPitCondition,
            'total' => $total,
        ]);
    }
}
