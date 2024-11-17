<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseElectricalSafetyRequest;
use App\Http\Requests\ApprovedHseExcavationProcedureRequest;
use App\Http\Requests\StoreHseExcavationProcedureRequest;
use App\Http\Requests\UpdateHseExcavationProcedureRequest;
use App\Http\Resources\HseExcavationProcedureResource;
use App\Models\HseExcavationProcedure;
use Illuminate\Http\Request;

class HseExcavationProcedureController extends Controller
{
   
    public function index()
    {
        $hseExcavationProcedure = HseExcavationProcedure::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseExcavationProcedureResource::collection($hseExcavationProcedure);
    }

    public function store(StoreHseExcavationProcedureRequest $request)
    {
        $hseExcavationProcedure = HseExcavationProcedure::create($request->validated());
        return new HseExcavationProcedureResource($hseExcavationProcedure);
    }

    public function show(HseExcavationProcedure $hseExcavationProcedure)
    {
        return HseExcavationProcedureResource::make($hseExcavationProcedure);
        
    }

    public function edit(ApprovedHseExcavationProcedureRequest $request, HseExcavationProcedure $hseExcavationProcedure)
    {
        $hseExcavationProcedure->approved_by = $request->approved_by;
        $hseExcavationProcedure->approved_date = now();
        $hseExcavationProcedure->save(); 

        return new HseExcavationProcedureResource($hseExcavationProcedure);
    }

    public function update(UpdateHseExcavationProcedureRequest $request, HseExcavationProcedure $hseExcavationProcedure)
    {
        $hseExcavationProcedure->update($request->validated());
        return new HseExcavationProcedureResource($hseExcavationProcedure);
    }

   
    public function destroy(HseExcavationProcedure $hseExcavationProcedure)
    {
        $hseExcavationProcedure->delete();
        $hseExcavationProcedure = HseExcavationProcedureResource::collection(HseExcavationProcedure::all());
        $totalCount = $hseExcavationProcedure->count();

        return response()->json([
            'data' => $hseExcavationProcedure,
            'total_count' => $totalCount,
        ]);
    }
}
