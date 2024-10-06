<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseMobileCranePlanningRiskAssessmentDocRequest;
use App\Http\Requests\StoreHseMobileCranePlanningRiskAssessmentDocRequest;
use App\Http\Requests\UpdateHseMobileCranePlanningRiskAssessmentDocRequest;
use App\Http\Resources\HseMobileCranePlanningRiskAssessmentDocResource;
use App\Models\HseMobileCranePlanningRiskAssessmentDoc;
use Illuminate\Http\Request;

class HseMobileCranePlanningRiskAssessmentDocController extends Controller
{
    
    public function index()
    {
        $hseRiskAssessment = HseMobileCranePlanningRiskAssessmentDoc::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseMobileCranePlanningRiskAssessmentDocResource::collection($hseRiskAssessment);
    }

    public function store(StoreHseMobileCranePlanningRiskAssessmentDocRequest $request)
    {
        $hseRiskAssessment = HseMobileCranePlanningRiskAssessmentDoc::create($request->validated());
        return new HseMobileCranePlanningRiskAssessmentDocResource($hseRiskAssessment);
    }

    public function show(HseMobileCranePlanningRiskAssessmentDoc $hseRiskAssessment)
    {
        return HseMobileCranePlanningRiskAssessmentDocResource::make($hseRiskAssessment);
        
    }

    public function edit(ApprovedHseMobileCranePlanningRiskAssessmentDocRequest $request, HseMobileCranePlanningRiskAssessmentDoc $hseRiskAssessment)
    {
        $hseRiskAssessment->approved_by = $request->approved_by;
        $hseRiskAssessment->approved_date = now();
        $hseRiskAssessment->save(); 

        return new HseMobileCranePlanningRiskAssessmentDocResource($hseRiskAssessment);
    }

    public function update(UpdateHseMobileCranePlanningRiskAssessmentDocRequest $request, HseMobileCranePlanningRiskAssessmentDoc $hseRiskAssessment)
    {
        $hseRiskAssessment->update($request->validated());
        return new HseMobileCranePlanningRiskAssessmentDocResource($hseRiskAssessment);
    }

    public function destroy(HseMobileCranePlanningRiskAssessmentDoc $hseRiskAssessment)
    {
        $hseRiskAssessment->delete();
        $hseRiskAssessment = HseMobileCranePlanningRiskAssessmentDocResource::collection(HseMobileCranePlanningRiskAssessmentDoc::all());
        $totalCount = $hseRiskAssessment->count();

        return response()->json([
            'data' => $hseRiskAssessment,
            'total_count' => $totalCount,
        ]);
    }
}
