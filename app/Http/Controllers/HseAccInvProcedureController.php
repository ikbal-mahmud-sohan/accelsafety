<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseAccInvProcedureRequest;
use App\Http\Requests\StoreHseAccInvProcedureRequest;
use App\Http\Requests\UpdateHseAccInvProcedureRequest;
use App\Http\Resources\HseAccInvProcedureResource;
use App\Models\HseAccInvProcedure;
use Illuminate\Http\Request;

class HseAccInvProcedureController extends Controller
{
    public function index()
    {
        $hseAccInvProcedure = HseAccInvProcedure::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseAccInvProcedureResource::collection($hseAccInvProcedure);
    }

    public function store(StoreHseAccInvProcedureRequest $request)
    {
        $hseAccInvProcedure = HseAccInvProcedure::create($request->validated());
        return new HseAccInvProcedureResource($hseAccInvProcedure);
    }

    public function show(HseAccInvProcedure $hseAccInvProcedure)
    {
        return HseAccInvProcedureResource::make($hseAccInvProcedure);
        
    }

    public function edit(ApprovedHseAccInvProcedureRequest $request, HseAccInvProcedure $hseAccInvProcedure)
    {
        $hseAccInvProcedure->approved_by = $request->approved_by;
        $hseAccInvProcedure->approved_date = now();
        $hseAccInvProcedure->save(); 

        return new HseAccInvProcedureResource($hseAccInvProcedure);
    }

    public function update(UpdateHseAccInvProcedureRequest $request, HseAccInvProcedure $hseAccInvProcedure)
    {
        $hseAccInvProcedure->update($request->validated());
        return new HseAccInvProcedureResource($hseAccInvProcedure);
    }

   
    public function destroy(HseAccInvProcedure $hseAccInvProcedure)
    {
        $hseAccInvProcedure->delete();
        $hseAccInvProcedure = HseAccInvProcedureResource::collection(HseAccInvProcedure::all());
        $totalCount = $hseAccInvProcedure->count();

        return response()->json([
            'data' => $hseAccInvProcedure,
            'total_count' => $totalCount,
        ]);
    }
}
