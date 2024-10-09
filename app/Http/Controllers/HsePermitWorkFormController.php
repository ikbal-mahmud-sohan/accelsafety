<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHsePermitWorkFormRequest;
use App\Http\Resources\HsePermitWorkFormResource;
use App\Models\HsePermitWorkForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HsePermitWorkFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hsePermitWorkForm = HsePermitWorkFormResource::collection(HsePermitWorkForm::all());
        $total = $hsePermitWorkForm->count();
            return response()->json([
                'data' => $hsePermitWorkForm,
                'total' => $total,
            ]);
    }

    public function store(StoreHsePermitWorkFormRequest $request)
    {
        // Initialize arrays to store paths of uploaded files
    $ptwLeadSignaturePaths = [];
    $ppeEngineerSignaturePaths = [];
    $ppeReceiverSignaturePaths = [];
    $ackSignaturePaths = [];
    $ackSupervisorSignaturePaths = [];
    $ackApprovalSignaturePaths = [];
    $jobCompletionSignaturePaths = [];

    // Handling PTW Lead Signatures
    if ($request->hasFile('ptw_lead_signature')) {
        foreach ($request->file('ptw_lead_signature') as $image) {
            $path = $image->store('ptw_lead_signature', 'public');
            $ptwLeadSignaturePaths[] = Storage::url($path);
        }
    }

    // Handling PPE Engineer Signatures
    if ($request->hasFile('ppe_engineer_signature')) {
        foreach ($request->file('ppe_engineer_signature') as $image) {
            $path = $image->store('ppe_engineer_signature', 'public');
            $ppeEngineerSignaturePaths[] = Storage::url($path);
        }
    }

    // Handling PPE Receiver Signatures
    if ($request->hasFile('ppe_receiver_signature')) {
        foreach ($request->file('ppe_receiver_signature') as $image) {
            $path = $image->store('ppe_receiver_signature', 'public');
            $ppeReceiverSignaturePaths[] = Storage::url($path);
        }
    }

    // Handling Acknowledgment Signatures
    if ($request->hasFile('ack_signature')) {
        foreach ($request->file('ack_signature') as $image) {
            $path = $image->store('ack_signature', 'public');
            $ackSignaturePaths[] = Storage::url($path);
        }
    }

    // Handling Supervisor Signatures
    if ($request->hasFile('ack_supervisor_signature')) {
        foreach ($request->file('ack_supervisor_signature') as $image) {
            $path = $image->store('ack_supervisor_signature', 'public');
            $ackSupervisorSignaturePaths[] = Storage::url($path);
        }
    }

    // Handling Approval Signatures
    if ($request->hasFile('ack_approval_signature')) {
        foreach ($request->file('ack_approval_signature') as $image) {
            $path = $image->store('ack_approval_signature', 'public');
            $ackApprovalSignaturePaths[] = Storage::url($path);
        }
    }

    // Handling Job Completion Signatures
    if ($request->hasFile('job_completion_signature')) {
        foreach ($request->file('job_completion_signature') as $image) {
            $path = $image->store('job_completion_signature', 'public');
            $jobCompletionSignaturePaths[] = Storage::url($path);
        }
    }

    // Validate request and merge signature paths
    $validatedData = $request->validated();

    // Add the signature paths to the validated data
    $validatedData['ptw_lead_signature'] = $ptwLeadSignaturePaths;
    $validatedData['ppe_engineer_signature'] = $ppeEngineerSignaturePaths;
    $validatedData['ppe_receiver_signature'] = $ppeReceiverSignaturePaths;
    $validatedData['ack_signature'] = $ackSignaturePaths;
    $validatedData['ack_supervisor_signature'] = $ackSupervisorSignaturePaths;
    $validatedData['ack_approval_signature'] = $ackApprovalSignaturePaths;
    $validatedData['job_completion_signature'] = $jobCompletionSignaturePaths;

    // If hazards or controls are present, store them as JSON
    $validatedData['hazards'] = $request->input('hazards') ?: [];
    $validatedData['general_hazards'] = $request->input('general_hazards') ?: [];
    $validatedData['general_control'] = $request->input('general_control') ?: [];
    $validatedData['work_at_height_hazards'] = $request->input('work_at_height_hazards') ?: [];
    $validatedData['work_at_height_control'] = $request->input('work_at_height_control') ?: [];
    $validatedData['confined_space_hazards'] = $request->input('confined_space_hazards') ?: [];
    $validatedData['confined_space_control'] = $request->input('confined_space_control') ?: [];
    $validatedData['electrical_work_hazards'] = $request->input('electrical_work_hazards') ?: [];
    $validatedData['electrical_work_control'] = $request->input('electrical_work_control') ?: [];
    $validatedData['hot_work_hazards'] = $request->input('hot_work_hazards') ?: [];
    $validatedData['hot_work_control'] = $request->input('hot_work_control') ?: [];
    $validatedData['mechanical_work_hazards'] = $request->input('mechanical_work_hazards') ?: [];
    $validatedData['mechanical_work_control'] = $request->input('mechanical_work_control') ?: [];
    $validatedData['civil_work_hazards'] = $request->input('civil_work_hazards') ?: [];
    $validatedData['civil_work_control'] = $request->input('civil_work_control') ?: [];

    // Other fields remain unchanged
    $hsePermitWorkForm = HsePermitWorkForm::create($validatedData);

    // Return the created resource
    return new HsePermitWorkFormResource($hsePermitWorkForm);
    }

    public function show(HsePermitWorkForm $hsePermitWorkForm)
    {
        return HsePermitWorkFormResource::make($hsePermitWorkForm);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HsePermitWorkForm $hsePermitWorkForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HsePermitWorkForm $hsePermitWorkForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HsePermitWorkForm $hsePermitWorkForm)
    {
        $hsePermitWorkForm->delete();
        $hsePermitWorkForm = HsePermitWorkFormResource::collection(HsePermitWorkForm::all());
        $total = $hsePermitWorkForm->count();
            return response()->json([
                'data' => $hsePermitWorkForm,
                'total' => $total,
            ]);
        
    }
}
