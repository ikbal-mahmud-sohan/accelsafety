<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccidentInvestigationRequest;
use App\Http\Resources\AccidentInvestigationResource;
use App\Models\AccidentInvestigation;
use App\Models\EmployeeInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AccidentInvestigationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    $accidentInvestigations = AccidentInvestigation::all();
    $accidentInvestigationData = $accidentInvestigations->map(function ($investigation) {
        $employee = EmployeeInfo::find($investigation->employee_id);
        
        $investigationData = new AccidentInvestigationResource($investigation);
        $investigationData['employee_name'] = $employee ? $employee->name : null;
        
        return $investigationData;
    });

    $totalCount = $accidentInvestigationData->count();

    return response()->json([
        'data' => $accidentInvestigationData,
        'total_count' => $totalCount,
    ]);
    }

    public function store(StoreAccidentInvestigationRequest $request)
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
        
        $accidentInvestigation = AccidentInvestigation::create($validatedData);
        return new AccidentInvestigationResource($accidentInvestigation);
 
    }

    /**
     * Display the specified resource.
     */
    public function show(AccidentInvestigation $accidentInvestigation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AccidentInvestigation $accidentInvestigation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AccidentInvestigation $accidentInvestigation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AccidentInvestigation $accidentInvestigation)
    {
        $accidentInvestigation->delete();
        $accidentInvestigations = AccidentInvestigation::all();
        $accidentInvestigationData = $accidentInvestigations->map(function ($investigation) {
            $employee = EmployeeInfo::find($investigation->employee_id);
            
            $investigationData = new AccidentInvestigationResource($investigation);
            $investigationData['employee_name'] = $employee ? $employee->name : null;
            
            return $investigationData;
        });

        $totalCount = $accidentInvestigationData->count();

        return response()->json([
            'data' => $accidentInvestigation,
            'total_count' => $totalCount,
        ]);
    }
}
