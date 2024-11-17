<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseFireSafetySystemRequest;
use App\Http\Requests\StoreHseFireSafetySystemRequest;
use App\Http\Requests\UpdateHseFireSafetySystemRequest;
use App\Http\Resources\HseFireSafetySystemResource;
use App\Models\HseFireSafetySystem;
use Illuminate\Http\Request;

class HseFireSafetySystemController extends Controller
{
    
    public function index()
    {
        $hseFireSafetySystem = HseFireSafetySystem::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseFireSafetySystemResource::collection($hseFireSafetySystem);
    }

    public function store(StoreHseFireSafetySystemRequest $request)
    {
        $hseFireSafetySystem = HseFireSafetySystem::create($request->validated());
        return new HseFireSafetySystemResource($hseFireSafetySystem);
    }

    public function show(HseFireSafetySystem $hseFireSafetySystem)
    {
        return HseFireSafetySystemResource::make($hseFireSafetySystem);
        
    }

    public function edit(ApprovedHseFireSafetySystemRequest $request, HseFireSafetySystem $hseFireSafetySystem)
    {
        $hseFireSafetySystem->approved_by = $request->approved_by;
        $hseFireSafetySystem->approved_date = now();
        $hseFireSafetySystem->save(); 

        return new HseFireSafetySystemResource($hseFireSafetySystem);
    }

    public function update(UpdateHseFireSafetySystemRequest $request, HseFireSafetySystem $hseFireSafetySystem)
    {
        $hseFireSafetySystem->update($request->validated());
        return new HseFireSafetySystemResource($hseFireSafetySystem);
    }

   
    public function destroy(HseFireSafetySystem $hseFireSafetySystem)
    {
        $hseFireSafetySystem->delete();
        $hseFireSafetySystem = HseFireSafetySystemResource::collection(HseFireSafetySystem::all());
        $totalCount = $hseFireSafetySystem->count();

        return response()->json([
            'data' => $hseFireSafetySystem,
            'total_count' => $totalCount,
        ]);
    }
}
