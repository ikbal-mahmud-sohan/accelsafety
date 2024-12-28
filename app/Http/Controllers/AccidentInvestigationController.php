<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedAccidentInvestigationRequest;
use App\Http\Requests\StoreAccidentInvestigationRequest;
use App\Http\Requests\UpdateAccidentInvestigationRequest;
use App\Http\Resources\AccidentInvestigationResource;
use App\Models\Accident;
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
        // dd($investigation);

        $employee = EmployeeInfo::find($investigation->employee_id);
        $investigation_name_1 = EmployeeInfo::find($investigation->investigation_name_1);
        $investigation_name_2 = EmployeeInfo::find($investigation->investigation_name_2);
        $investigation_name_3 = EmployeeInfo::find($investigation->investigation_name_3);
        $investigation_name_4 = EmployeeInfo::find($investigation->investigation_name_4);
        
        $investigationData = new AccidentInvestigationResource($investigation);
        $investigationData['employee_name'] = $employee ? $employee->name : null;
        $investigationData['name_1'] = $investigation_name_1 ? $investigation_name_1->name : null;
        $investigationData['name_2'] = $investigation_name_2 ? $investigation_name_2->name : null;
        $investigationData['name_3'] = $investigation_name_3 ? $investigation_name_3->name : null;
        $investigationData['name_4'] = $investigation_name_4 ? $investigation_name_4->name : null;
        
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
        $investigationSignPaths = [];
    
        for ($i = 1; $i <= 4; $i++) {
            $fieldName = "investigation_sign_$i";
            if ($request->hasFile($fieldName)) {
                $investigationSignPaths[$fieldName] = [];
                foreach ($request->file($fieldName) as $image) {
                    $path = $image->store($fieldName, 'public');
                    $investigationSignPaths[$fieldName][] = Storage::url($path);
                }
            }
        }
    
        $validatedData = $request->validated();
    
        for ($i = 1; $i <= 4; $i++) {
            $fieldName = "investigation_sign_$i";
            $validatedData[$fieldName] = $investigationSignPaths[$fieldName] ?? null;
        }
    
        $accidentInvestigation = AccidentInvestigation::create([
            'accident_id' => $validatedData['accident_id'],
            'investigation_name_1' => $validatedData['investigation_name_1'] ?? null,
            'investigation_designation_1' => $validatedData['investigation_designation_1'] ?? null,
            'investigation_sign_1' => $validatedData['investigation_sign_1'] ?? null,
            'investigation_name_2' => $validatedData['investigation_name_2'] ?? null,
            'investigation_designation_2' => $validatedData['investigation_designation_2'] ?? null,
            'investigation_sign_2' => $validatedData['investigation_sign_2'] ?? null,
            'investigation_name_3' => $validatedData['investigation_name_3'] ?? null,
            'investigation_designation_3' => $validatedData['investigation_designation_3'] ?? null,
            'investigation_sign_3' => $validatedData['investigation_sign_3'] ?? null,
            'investigation_name_4' => $validatedData['investigation_name_4'] ?? null,
            'investigation_designation_4' => $validatedData['investigation_designation_4'] ?? null,
            'investigation_sign_4' => $validatedData['investigation_sign_4'] ?? null,
            'status' => AccidentInvestigation::STATUS_ASSIGNED,
        ]);
    
        return new AccidentInvestigationResource($accidentInvestigation);
    }

    /**
     * Display the specified resource.
     */
    public function show(AccidentInvestigation $accidentInvestigation)
    {
        return AccidentInvestigationResource::make($accidentInvestigation);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function approved(ApprovedAccidentInvestigationRequest $request, AccidentInvestigation $accidentInvestigation)
    {
         // Update the status in the Accident Investigation table
            $accidentInvestigation->update([
                'status' => $request->status, // Update to the status provided in the request
            ]);

            // Retrieve the associated accident ID
            $accidentId = $accidentInvestigation->accident_id;

            // Conditionally update the Accident table status based on Accident Investigation status
            if ($request->status === AccidentInvestigation::STATUS_APPROVED) {
                Accident::where('id', $accidentId)->update([
                    'status' => Accident::STATUS_CLOSED,
                ]);
            }

            // Return the updated Accident Investigation data
            return new AccidentInvestigationResource($accidentInvestigation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccidentInvestigationRequest $request, AccidentInvestigation $accidentInvestigation)
{
    $validatedData = $request->validated();

    if ($request->hasFile('reviewed_by_department_signature')) {
        $paths = [];
        foreach ($request->file('reviewed_by_department_signature') as $image) {
            $path = $image->store('reviewed_by_department_signature', 'public');
            $paths[] = Storage::url($path);
        }
        $validatedData['reviewed_by_department_signature'] = $paths;
    }

    if ($request->hasFile('reviewed_by_unit_signature')) {
        $paths = [];
        foreach ($request->file('reviewed_by_unit_signature') as $image) {
            $path = $image->store('reviewed_by_unit_signature', 'public');
            $paths[] = Storage::url($path);
        }
        $validatedData['reviewed_by_unit_signature'] = $paths;
    }

    if ($request->hasFile('approved_by_signature')) {
        $paths = [];
        foreach ($request->file('approved_by_signature') as $image) {
            $path = $image->store('approved_by_signature', 'public');
            $paths[] = Storage::url($path);
        }
        $validatedData['approved_by_signature'] = $paths;
    }

    $validatedData['status'] = AccidentInvestigation::STATUS_REVIEWED;

    $accidentInvestigation->update($validatedData);

    return new AccidentInvestigationResource($accidentInvestigation);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AccidentInvestigation $accidentInvestigation)
    {
        $accidentInvestigation->delete();
        $accidentInvestigations = AccidentInvestigation::all();
    $accidentInvestigationData = $accidentInvestigations->map(function ($investigation) {
        // dd($investigation);

        $employee = EmployeeInfo::find($investigation->employee_id);
        $investigation_name_1 = EmployeeInfo::find($investigation->investigation_name_1);
        $investigation_name_2 = EmployeeInfo::find($investigation->investigation_name_2);
        $investigation_name_3 = EmployeeInfo::find($investigation->investigation_name_3);
        $investigation_name_4 = EmployeeInfo::find($investigation->investigation_name_4);
        
        $investigationData = new AccidentInvestigationResource($investigation);
        $investigationData['employee_name'] = $employee ? $employee->name : null;
        $investigationData['name_1'] = $investigation_name_1 ? $investigation_name_1->name : null;
        $investigationData['name_2'] = $investigation_name_2 ? $investigation_name_2->name : null;
        $investigationData['name_3'] = $investigation_name_3 ? $investigation_name_3->name : null;
        $investigationData['name_4'] = $investigation_name_4 ? $investigation_name_4->name : null;
        
        return $investigationData;
    });

    $totalCount = $accidentInvestigationData->count();

    return response()->json([
        'data' => $accidentInvestigationData,
        'total_count' => $totalCount,
    ]);
    }
}
