<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseIncidentInvestigationRequest;
use App\Http\Resources\HseIncidentInvestigationResource;
use App\Models\HseIncidentInvestigation;
use Illuminate\Http\Request;
use App\Models\EmployeeInfo;
use Illuminate\Support\Facades\Storage;


class HseIncidentInvestigationController extends Controller
{
    public function index()
    {
        
    $$hseIncidentInvestigation = HseIncidentInvestigation::all();
    $hseIncidentInvestigationData = $$hseIncidentInvestigation->map(function ($investigation) {
        // dd($investigation);

        $employee = EmployeeInfo::find($investigation->employee_id);
        $investigation_name_1 = EmployeeInfo::find($investigation->investigation_name_1);
        $investigation_name_2 = EmployeeInfo::find($investigation->investigation_name_2);
        $investigation_name_3 = EmployeeInfo::find($investigation->investigation_name_3);
        $investigation_name_4 = EmployeeInfo::find($investigation->investigation_name_4);
        
        $investigationData = new HseIncidentInvestigationResource($investigation);
        $investigationData['employee_name'] = $employee ? $employee->name : null;
        $investigationData['name_1'] = $investigation_name_1 ? $investigation_name_1->name : null;
        $investigationData['name_2'] = $investigation_name_2 ? $investigation_name_2->name : null;
        $investigationData['name_3'] = $investigation_name_3 ? $investigation_name_3->name : null;
        $investigationData['name_4'] = $investigation_name_4 ? $investigation_name_4->name : null;
        
        return $investigationData;
    });

    $totalCount = $hseIncidentInvestigationData->count();

    return response()->json([
        'data' => $hseIncidentInvestigationData,
        'total_count' => $totalCount,
    ]);
    }

    public function store(StoreHseIncidentInvestigationRequest $request)
    {


        $investigationSign1Paths = [];
       
        if ($request->hasFile('investigation_sign_1')) {
            foreach ($request->file('investigation_sign_1') as $image) {
                $path = $image->store('investigation_sign_1', 'public');
                $investigationSign1Paths[] = Storage::url($path);
            }
        }
        $investigationSign2Paths = [];

        if ($request->hasFile('investigation_sign_2')) {
            foreach ($request->file('investigation_sign_2') as $image) {
                $path = $image->store('investigation_sign_2', 'public');
                $investigationSign2Paths[] = Storage::url($path);
            }
        }
        $investigationSign3Paths = [];
        if ($request->hasFile('investigation_sign_3')) {
            foreach ($request->file('investigation_sign_3') as $image) {
                $path = $image->store('investigation_sign_3', 'public');
                $investigationSign3Paths[] = Storage::url($path);
            }
        }
        $investigationSign4Paths = [];
        if ($request->hasFile('investigation_sign_4')) {
            foreach ($request->file('investigation_sign_4') as $image) {
                $path = $image->store('investigation_sign_4', 'public');
                $investigationSign4Paths[] = Storage::url($path);
            }
        }
        $reviewedByDepartmentSignaturePaths = [];
        if ($request->hasFile('reviewed_by_department_signature')) {
            foreach ($request->file('reviewed_by_department_signature') as $image) {
                $path = $image->store('reviewed_by_department_signature', 'public');
                $reviewedByDepartmentSignaturePaths[] = Storage::url($path);
            }
        }
        $reviewedByUnitSignaturePaths = [];
        if ($request->hasFile('reviewed_by_unit_signature')) {
            foreach ($request->file('reviewed_by_unit_signature') as $image) {
                $path = $image->store('reviewed_by_unit_signature', 'public');
                $reviewedByUnitSignaturePaths[] = Storage::url($path);
            }
        }
        $approvedBySignaturePaths = [];
        if ($request->hasFile('approved_by_signature')) {
            foreach ($request->file('approved_by_signature') as $image) {
                $path = $image->store('approved_by_signature', 'public');
                $approvedBySignaturePaths[] = Storage::url($path);
            }
        }
        
        $validatedData = $request->validated();

        $validatedData['investigation_sign_1'] = $investigationSign1Paths; 
        $validatedData['investigation_sign_2'] = $investigationSign2Paths; 
        $validatedData['investigation_sign_3'] = $investigationSign3Paths; 
        $validatedData['investigation_sign_4'] = $investigationSign4Paths; 
        $validatedData['reviewed_by_department_signature'] = $reviewedByDepartmentSignaturePaths; 
        $validatedData['reviewed_by_unit_signature'] = $reviewedByUnitSignaturePaths; 
        $validatedData['approved_by_signature'] = $approvedBySignaturePaths; 

        
        $validatedData['type_of_employee'] = isset($validatedData['type_of_employee']) ? $validatedData['type_of_employee']: null;
        $validatedData['type_of_accident'] = isset($validatedData['type_of_accident']) ? $validatedData['type_of_accident'] : null;
        $validatedData['nature_of_injury'] = isset($validatedData['nature_of_injury']) ? $validatedData['nature_of_injury'] : null;
        $validatedData['unsafe_acts'] = isset($validatedData['unsafe_acts']) ? $validatedData['unsafe_acts'] : null;
        $validatedData['unsafe_conditions'] = isset($validatedData['unsafe_conditions']) ? $validatedData['unsafe_conditions'] : null;
        $validatedData['management_deficiencies'] = isset($validatedData['management_deficiencies']) ? $validatedData['management_deficiencies'] : null;
        
        $HseIncidentInvestigation = HseIncidentInvestigation::create($validatedData);
        return new HseIncidentInvestigationResource($HseIncidentInvestigation);
 
    }

    /**
     * Display the specified resource.
     */
    public function show(HseIncidentInvestigation $HseIncidentInvestigation)
    {
        return HseIncidentInvestigationResource::make($HseIncidentInvestigation);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HseIncidentInvestigation $HseIncidentInvestigation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HseIncidentInvestigation $HseIncidentInvestigation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseIncidentInvestigation $HseIncidentInvestigation)
    {
        $HseIncidentInvestigation->delete();
        $$hseIncidentInvestigation = HseIncidentInvestigation::all();
    $hseIncidentInvestigationData = $$hseIncidentInvestigation->map(function ($investigation) {
        // dd($investigation);

        $employee = EmployeeInfo::find($investigation->employee_id);
        $investigation_name_1 = EmployeeInfo::find($investigation->investigation_name_1);
        $investigation_name_2 = EmployeeInfo::find($investigation->investigation_name_2);
        $investigation_name_3 = EmployeeInfo::find($investigation->investigation_name_3);
        $investigation_name_4 = EmployeeInfo::find($investigation->investigation_name_4);
        
        $investigationData = new HseIncidentInvestigationResource($investigation);
        $investigationData['employee_name'] = $employee ? $employee->name : null;
        $investigationData['name_1'] = $investigation_name_1 ? $investigation_name_1->name : null;
        $investigationData['name_2'] = $investigation_name_2 ? $investigation_name_2->name : null;
        $investigationData['name_3'] = $investigation_name_3 ? $investigation_name_3->name : null;
        $investigationData['name_4'] = $investigation_name_4 ? $investigation_name_4->name : null;
        
        return $investigationData;
    });

    $totalCount = $hseIncidentInvestigationData->count();

    return response()->json([
        'data' => $hseIncidentInvestigationData,
        'total_count' => $totalCount,
    ]);
    }
}
