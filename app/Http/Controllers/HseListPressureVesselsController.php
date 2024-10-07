<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseListPressureVesselsRequest;
use App\Http\Resources\HseListPressureVesselsResource;
use App\Models\HseListPressureVessels;
use Illuminate\Http\Request;

class HseListPressureVesselsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hseListPressureVessels = HseListPressureVesselsResource::collection(HseListPressureVessels::all());
       $total = $hseListPressureVessels->count();
        return response()->json([
            'data' => $hseListPressureVessels,
            'total' => $total,
        ]);
    }

    public function store(StoreHseListPressureVesselsRequest $request)
    {
        $hseListPressureVessels = HseListPressureVessels::create($request->validated());
        return new HseListPressureVesselsResource($hseListPressureVessels);
    }

    /**
     * Display the specified resource.
     */
    public function show(HseListPressureVessels $hseListPressureVessels)
    {
        return HseListPressureVesselsResource::make($hseListPressureVessels);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HseListPressureVessels $hseListPressureVessels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HseListPressureVessels $hseListPressureVessels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseListPressureVessels $hseListPressureVessels)
    {
        $hseListPressureVessels->delete();
        $hseListPressureVessels = HseListPressureVesselsResource::collection(HseListPressureVessels::all());
        $total = $hseListPressureVessels->count();
         return response()->json([
             'data' => $hseListPressureVessels,
             'total' => $total,
         ]);
    }
}
