<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseMobileCraneSafetyProcedureDocRequest;
use App\Http\Requests\StoreMobileCraneSafetyProcedureDocRequest;
use App\Http\Requests\UpdateMobileCraneSafetyProcedureDocRequest;
use App\Http\Resources\HseMobileCraneSafetyProcedureDocResource;
use App\Models\HseMobileCraneSafetyProcedureDoc;
use Illuminate\Http\Request;

class HseMobileCraneSafetyProcedureDocController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hseSafetyProcedure = HseMobileCraneSafetyProcedureDoc::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseMobileCraneSafetyProcedureDocResource::collection($hseSafetyProcedure);
    }

    public function store(StoreMobileCraneSafetyProcedureDocRequest $request)
    {
        $hseSafetyProcedure = HseMobileCraneSafetyProcedureDoc::create($request->validated());
        return new HseMobileCraneSafetyProcedureDocResource($hseSafetyProcedure);
    }

    /**
     * Display the specified resource.
     */
    public function show(HseMobileCraneSafetyProcedureDoc $hseSafetyProcedure)
    {
        return HseMobileCraneSafetyProcedureDocResource::make($hseSafetyProcedure);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApprovedHseMobileCraneSafetyProcedureDocRequest $request, HseMobileCraneSafetyProcedureDoc $hseSafetyProcedure)
    {
        $hseSafetyProcedure->approved_by = $request->approved_by;
        $hseSafetyProcedure->approved_date = now();
        $hseSafetyProcedure->save(); 

        return new HseMobileCraneSafetyProcedureDocResource($hseSafetyProcedure);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMobileCraneSafetyProcedureDocRequest $request, HseMobileCraneSafetyProcedureDoc $hseSafetyProcedure)
    {
        $hseSafetyProcedure->update($request->validated());
        return new HseMobileCraneSafetyProcedureDocResource($hseSafetyProcedure);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseMobileCraneSafetyProcedureDoc $hseSafetyProcedure)
    {
        $hseSafetyProcedure->delete();
        $hseSafetyProcedure = HseMobileCraneSafetyProcedureDocResource::collection(HseMobileCraneSafetyProcedureDoc::all());
        $totalCount = $hseSafetyProcedure->count();

        return response()->json([
            'data' => $hseSafetyProcedure,
            'total_count' => $totalCount,
        ]);
    }
}
