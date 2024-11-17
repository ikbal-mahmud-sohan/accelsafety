<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseLOTORequest;
use App\Http\Requests\StoreHseLOTORequest;
use App\Http\Requests\UpdateHseLOTORequest;
use App\Http\Resources\HseLOTOResource;
use App\Models\HseLOTO;
use Illuminate\Http\Request;

class HseLOTOController extends Controller
{
    public function index()
    {
        $hseLOTO = HseLOTO::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseLOTOResource::collection($hseLOTO);
    }

    public function store(StoreHseLOTORequest $request)
    {
        $hseLOTO = HseLOTO::create($request->validated());
        return new HseLOTOResource($hseLOTO);
    }

    public function show(HseLOTO $hseLOTO)
    {
        return HseLOTOResource::make($hseLOTO);
        
    }

    public function edit(ApprovedHseLOTORequest $request, HseLOTO $hseLOTO)
    {
        $hseLOTO->approved_by = $request->approved_by;
        $hseLOTO->approved_date = now();
        $hseLOTO->save(); 

        return new HseLOTOResource($hseLOTO);
    }

    public function update(UpdateHseLOTORequest $request, HseLOTO $hseLOTO)
    {
        $hseLOTO->update($request->validated());
        return new HseLOTOResource($hseLOTO);
    }

   
    public function destroy(HseLOTO $hseLOTO)
    {
        $hseLOTO->delete();
        $hseLOTO = HseLOTOResource::collection(HseLOTO::all());
        $totalCount = $hseLOTO->count();

        return response()->json([
            'data' => $hseLOTO,
            'total_count' => $totalCount,
        ]);
    }
}
