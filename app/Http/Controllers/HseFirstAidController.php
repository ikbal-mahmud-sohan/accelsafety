<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseFirstAidRequest;
use App\Http\Requests\StoreHseFirstAidRequest;
use App\Http\Requests\UpdateHseFirstAidRequest;
use App\Http\Resources\HseFirstAidResource;
use App\Models\HseFirstAid;

class HseFirstAidController extends Controller
{
    public function index()
    {
        $hseFirstAid = HseFirstAid::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseFirstAidResource::collection($hseFirstAid);
    }

    public function store(StoreHseFirstAidRequest $request)
    {
        $hseFirstAid = HseFirstAid::create($request->validated());
        return new HseFirstAidResource($hseFirstAid);
    }

    public function show(HseFirstAid $hseFirstAid)
    {
        return HseFirstAidResource::make($hseFirstAid);
        
    }

    public function edit(ApprovedHseFirstAidRequest $request, HseFirstAid $hseFirstAid)
    {
        $hseFirstAid->approved_by = $request->approved_by;
        $hseFirstAid->approved_date = now();
        $hseFirstAid->save(); 

        return new HseFirstAidResource($hseFirstAid);
    }

    public function update(UpdateHseFirstAidRequest $request, HseFirstAid $hseFirstAid)
    {
        $hseFirstAid->update($request->validated());
        return new HseFirstAidResource($hseFirstAid);
    }

   
    public function destroy(HseFirstAid $hseFirstAid)
    {
        $hseFirstAid->delete();
        $hseFirstAid = HseFirstAidResource::collection(HseFirstAid::all());
        $totalCount = $hseFirstAid->count();

        return response()->json([
            'data' => $hseFirstAid,
            'total_count' => $totalCount,
        ]);
    }
}
