<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedMaterialProcedureRequest;
use App\Http\Requests\StoreMaterialProcedureRequest;
use App\Http\Requests\UpdateMaterialProcedureRequest;
use App\Http\Resources\HseMaterialProcedureResource;
use App\Models\HseMaterialProcedure;
use Illuminate\Http\Request;

class HseMaterialProcedureController extends Controller
{
   
    public function index()
    {
        $hseMaterialProcedure = HseMaterialProcedure::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseMaterialProcedureResource::collection($hseMaterialProcedure);
    }

    public function store(StoreMaterialProcedureRequest $request)
    {
        $hseMaterialProcedure = HseMaterialProcedure::create($request->validated());
        return new HseMaterialProcedureResource($hseMaterialProcedure);
    }

    public function show(HseMaterialProcedure $hseMaterialProcedure)
    {
        return HseMaterialProcedureResource::make($hseMaterialProcedure);
        
    }

    public function edit(ApprovedMaterialProcedureRequest $request, HseMaterialProcedure $hseMaterialProcedure)
    {
        $hseMaterialProcedure->approved_by = $request->approved_by;
        $hseMaterialProcedure->approved_date = now();
        $hseMaterialProcedure->save(); 

        return new HseMaterialProcedureResource($hseMaterialProcedure);
    }

    public function update(UpdateMaterialProcedureRequest $request, HseMaterialProcedure $hseMaterialProcedure)
    {
        $hseMaterialProcedure->update($request->validated());
        return new HseMaterialProcedureResource($hseMaterialProcedure);
    }

   
    public function destroy(HseMaterialProcedure $hseMaterialProcedure)
    {
        $hseMaterialProcedure->delete();
        $hseMaterialProcedure = HseMaterialProcedureResource::collection(HseMaterialProcedure::all());
        $totalCount = $hseMaterialProcedure->count();

        return response()->json([
            'data' => $hseMaterialProcedure,
            'total_count' => $totalCount,
        ]);
    }
}
