<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseJobSafetyAnalysisRequest;
use App\Http\Requests\StoreHseJobSafetyAnalysisRequest;
use App\Http\Requests\UpdateHseJobSafetyAnalysisRequest;
use App\Http\Resources\HseJobSafetyAnalysisResource;
use App\Models\HseJobSafetyAnalysis;
use Illuminate\Http\Request;

class HseJobSafetyAnalysisController extends Controller
{

    public function index()
    {
        $hseJobSafetyAnalysis = HseJobSafetyAnalysis::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseJobSafetyAnalysisResource::collection($hseJobSafetyAnalysis);
    }

    public function store(StoreHseJobSafetyAnalysisRequest $request)
    {
        $hseJobSafetyAnalysis = HseJobSafetyAnalysis::create($request->validated());
        return new HseJobSafetyAnalysisResource($hseJobSafetyAnalysis);
    }

    public function show(HseJobSafetyAnalysis $hseJobSafetyAnalysis)
    {
        return HseJobSafetyAnalysisResource::make($hseJobSafetyAnalysis);
        
    }

    public function edit(ApprovedHseJobSafetyAnalysisRequest $request, HseJobSafetyAnalysis $hseJobSafetyAnalysis)
    {
        $hseJobSafetyAnalysis->approved_by = $request->approved_by;
        $hseJobSafetyAnalysis->approved_date = now();
        $hseJobSafetyAnalysis->save(); 

        return new HseJobSafetyAnalysisResource($hseJobSafetyAnalysis);
    }

    public function update(UpdateHseJobSafetyAnalysisRequest $request, HseJobSafetyAnalysis $hseJobSafetyAnalysis)
    {
        $hseJobSafetyAnalysis->update($request->validated());
        return new HseJobSafetyAnalysisResource($hseJobSafetyAnalysis);
    }

   
    public function destroy(HseJobSafetyAnalysis $hseJobSafetyAnalysis)
    {
        $hseJobSafetyAnalysis->delete();
        $hseJobSafetyAnalysis = HseJobSafetyAnalysisResource::collection(HseJobSafetyAnalysis::all());
        $totalCount = $hseJobSafetyAnalysis->count();

        return response()->json([
            'data' => $hseJobSafetyAnalysis,
            'total_count' => $totalCount,
        ]);
    }
}


