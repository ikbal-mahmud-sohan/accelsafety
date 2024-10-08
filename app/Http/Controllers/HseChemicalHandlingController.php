<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseChemicalHandlingRequest;
use App\Http\Requests\StoreHseChemicalHandlingRequest;
use App\Http\Requests\UpdateHseChemicalHandlingRequest;
use App\Http\Resources\HseChemicalHandlingResource;
use App\Models\HseChemicalHandling;
use Illuminate\Http\Request;

class HseChemicalHandlingController extends Controller
{
   

    public function index()
    {
        $hseChemicalHandling = HseChemicalHandling::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseChemicalHandlingResource::collection($hseChemicalHandling);
    }

    public function store(StoreHseChemicalHandlingRequest $request)
    {
        $hseChemicalHandling = HseChemicalHandling::create($request->validated());
        return new HseChemicalHandlingResource($hseChemicalHandling);
    }

    public function show(HseChemicalHandling $hseChemicalHandling)
    {
        return HseChemicalHandlingResource::make($hseChemicalHandling);
        
    }

    public function edit(ApprovedHseChemicalHandlingRequest $request, HseChemicalHandling $hseChemicalHandling)
    {
        $hseChemicalHandling->approved_by = $request->approved_by;
        $hseChemicalHandling->approved_date = now();
        $hseChemicalHandling->save(); 

        return new HseChemicalHandlingResource($hseChemicalHandling);
    }

    public function update(UpdateHseChemicalHandlingRequest $request, HseChemicalHandling $hseChemicalHandling)
    {
        $hseChemicalHandling->update($request->validated());
        return new HseChemicalHandlingResource($hseChemicalHandling);
    }

   
    public function destroy(HseChemicalHandling $hseChemicalHandling)
    {
        $hseChemicalHandling->delete();
        $hseChemicalHandling = HseChemicalHandlingResource::collection(HseChemicalHandling::all());
        $totalCount = $hseChemicalHandling->count();

        return response()->json([
            'data' => $hseChemicalHandling,
            'total_count' => $totalCount,
        ]);
    }
}
