<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHsePersonalProtectiveRequest;
use App\Http\Requests\StoreHsePersonalProtectiveRequest;
use App\Http\Requests\UpdateHsePersonalProtectiveRequest;
use App\Http\Resources\HsePersonalProtectiveResource;
use App\Models\HsePersonalProtective;

class HsePersonalProtectiveController extends Controller
{

    public function index()
    {
        $hsePersonalProtective = HsePersonalProtective::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HsePersonalProtectiveResource::collection($hsePersonalProtective);
    }

    public function store(StoreHsePersonalProtectiveRequest $request)
    {
        $hsePersonalProtective = HsePersonalProtective::create($request->validated());
        return new HsePersonalProtectiveResource($hsePersonalProtective);
    }

    public function show(HsePersonalProtective $hsePersonalProtective)
    {
        return HsePersonalProtectiveResource::make($hsePersonalProtective);
        
    }

    public function edit(ApprovedHsePersonalProtectiveRequest $request, HsePersonalProtective $hsePersonalProtective)
    {
        $hsePersonalProtective->approved_by = $request->approved_by;
        $hsePersonalProtective->approved_date = now();
        $hsePersonalProtective->save(); 

        return new HsePersonalProtectiveResource($hsePersonalProtective);
    }

    public function update(UpdateHsePersonalProtectiveRequest $request, HsePersonalProtective $hsePersonalProtective)
    {
        $hsePersonalProtective->update($request->validated());
        return new HsePersonalProtectiveResource($hsePersonalProtective);
    }

   
    public function destroy(HsePersonalProtective $hsePersonalProtective)
    {
        $hsePersonalProtective->delete();
        $hsePersonalProtective = HsePersonalProtectiveResource::collection(HsePersonalProtective::all());
        $totalCount = $hsePersonalProtective->count();

        return response()->json([
            'data' => $hsePersonalProtective,
            'total_count' => $totalCount,
        ]);
    }
}
