<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHsePermitWorkRequest;
use App\Http\Requests\StoreHsePermitWorkRequest;
use App\Http\Requests\UpdateHsePermitWorkRequest;
use App\Http\Resources\HsePermitWorkResource;
use App\Models\HsePermitWork;
use Illuminate\Http\Request;

class HsePermitWorkController extends Controller
{
   
    public function index()
    {
        $hsePermitWork = HsePermitWork::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HsePermitWorkResource::collection($hsePermitWork);
    }

    public function store(StoreHsePermitWorkRequest $request)
    {
        $hsePermitWork = HsePermitWork::create($request->validated());
        return new HsePermitWorkResource($hsePermitWork);
    }

    public function show(HsePermitWork $hsePermitWork)
    {
        return HsePermitWorkResource::make($hsePermitWork);
        
    }

    public function edit(ApprovedHsePermitWorkRequest $request, HsePermitWork $hsePermitWork)
    {
        $hsePermitWork->approved_by = $request->approved_by;
        $hsePermitWork->approved_date = now();
        $hsePermitWork->save(); 

        return new HsePermitWorkResource($hsePermitWork);
    }

    public function update(UpdateHsePermitWorkRequest $request, HsePermitWork $hsePermitWork)
    {
        $hsePermitWork->update($request->validated());
        return new HsePermitWorkResource($hsePermitWork);
    }

   
    public function destroy(HsePermitWork $hsePermitWork)
    {
        $hsePermitWork->delete();
        $hsePermitWork = HsePermitWorkResource::collection(HsePermitWork::all());
        $totalCount = $hsePermitWork->count();

        return response()->json([
            'data' => $hsePermitWork,
            'total_count' => $totalCount,
        ]);
    }
}
