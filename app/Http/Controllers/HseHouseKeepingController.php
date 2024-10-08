<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseHouseKeepingRequest;
use App\Http\Requests\StoreHseHouseKeepingRequest;
use App\Http\Requests\UpdateHseHouseKeepingRequest;
use App\Http\Resources\HseHseHouseKeepingResource;
use App\Models\HseHouseKeeping;
use Illuminate\Http\Request;

class HseHouseKeepingController extends Controller
{
    public function index()
    {
        $hseHouseKeeping = HseHouseKeeping::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseHseHouseKeepingResource::collection($hseHouseKeeping);
    }

    public function store(StoreHseHouseKeepingRequest $request)
    {
        $hseHouseKeeping = HseHouseKeeping::create($request->validated());
        return new HseHseHouseKeepingResource($hseHouseKeeping);
    }

    public function show(HseHouseKeeping $hseHouseKeeping)
    {
        return HseHseHouseKeepingResource::make($hseHouseKeeping);
        
    }

    public function edit(ApprovedHseHouseKeepingRequest $request, HseHouseKeeping $hseHouseKeeping)
    {
        $hseHouseKeeping->approved_by = $request->approved_by;
        $hseHouseKeeping->approved_date = now();
        $hseHouseKeeping->save(); 

        return new HseHseHouseKeepingResource($hseHouseKeeping);
    }

    public function update(UpdateHseHouseKeepingRequest $request, HseHouseKeeping $hseHouseKeeping)
    {
        $hseHouseKeeping->update($request->validated());
        return new HseHseHouseKeepingResource($hseHouseKeeping);
    }

   
    public function destroy(HseHouseKeeping $hseHouseKeeping)
    {
        $hseHouseKeeping->delete();
        $hseHouseKeeping = HseHseHouseKeepingResource::collection(HseHouseKeeping::all());
        $totalCount = $hseHouseKeeping->count();

        return response()->json([
            'data' => $hseHouseKeeping,
            'total_count' => $totalCount,
        ]);
    }
}
