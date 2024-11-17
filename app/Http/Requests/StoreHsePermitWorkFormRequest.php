<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHsePermitWorkFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'permit_no' => 'nullable|string|max:255',
            'issue_date' => 'nullable|string|max:255',
            'ptw_time' => 'nullable|string|max:255',
            'ptw_dept_name' => 'nullable|string|max:255',
            'ptw_from_dept_name' => 'nullable|string|max:255',
            'ptw_to_dept_name' => 'nullable|string|max:255',
            'ptw_work_agency' => 'nullable|string|max:255',
            'ptw_description' => 'nullable|string|max:255',
            'ptw_of_job' => 'nullable|string|max:255',
            'ptw_job' => 'nullable|string|max:255',
            'ptw_issuer' => 'nullable|string|max:255',
            'ptw_lead_signature' => 'sometimes|array',
            'ptw_lead_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            // Hazards and controls stored as JSON
            'hazards' => 'nullable|array',
            'general_hazards' => 'nullable|array',
            'general_control' => 'nullable|array',
            'work_at_height_hazards' => 'nullable|array',
            'work_at_height_control' => 'nullable|array',
            'confined_space_hazards' => 'nullable|array',
            'confined_space_control' => 'nullable|array',
            'electrical_work_hazards' => 'nullable|array',
            'electrical_work_control' => 'nullable|array',
            'hot_work_hazards' => 'nullable|array',
            'hot_work_control' => 'nullable|array',
            'mechanical_work_hazards' => 'nullable|array',
            'mechanical_work_control' => 'nullable|array',
            'civil_work_hazards' => 'nullable|array',
            'civil_work_control' => 'nullable|array',

            // PPE fields
            'ppe_please' => 'nullable|string|max:255',
            'ppe_isolate' => 'nullable|string|max:255',
            'ppe_the' => 'nullable|string|max:255',
            'ppe_equipment' => 'nullable|string|max:255',
            'ppe_engineer_signature' => 'sometimes|array',
            'ppe_engineer_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ppe_lead_signature' => 'nullable|array',
            'ppe_receiver_name' => 'nullable|string|max:255',
            'ppe_receiver_signature' => 'sometimes|array',
            'ppe_receiver_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ppe_receiver_date' => 'nullable|string|max:255',

            // Acknowledgment fields
            'ack_name' => 'nullable|string|max:255',
            'ack_signature' => 'sometimes|array',
            'ack_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ack_dept' => 'nullable|string|max:255',
            'ack_supervisor_name' => 'nullable|string|max:255',
            'ack_supervisor_signature' => 'sometimes|array',
            'ack_supervisor_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ack_supervisor_dept' => 'nullable|string|max:255',
            'ack_name_of_workers' => 'nullable|array',
            'ack_approval_name' => 'nullable|string|max:255',
            'ack_approval_signature' => 'sometimes|array',
            'ack_approval_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            // Job completion fields
            'job_completion_date' => 'nullable|string|max:255',
            'job_completion_time' => 'nullable|string|max:255',
            'job_completion_signature' => 'sometimes|array',
            'job_completion_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            // PTW date and agency fields
            'ptw_date_1' => 'nullable|string|max:255',
            'ptw_work_agency_1' => 'nullable|string|max:255',
            'ptw_receiver_1' => 'nullable|string|max:255',
            'ptw_location_In_Charge_1' => 'nullable|string|max:255',
            'ptw_work_after_6pm_1' => 'nullable|string|max:255',
            'ptw_date_2' => 'nullable|string|max:255',
            'ptw_work_agency_2' => 'nullable|string|max:255',
            'ptw_receiver_2' => 'nullable|string|max:255',
            'ptw_location_In_Charge_2' => 'nullable|string|max:255',
            'ptw_work_after_6pm_2' => 'nullable|string|max:255',
            'ptw_date_3' => 'nullable|string|max:255',
            'ptw_work_agency_3' => 'nullable|string|max:255',
            'ptw_receiver_3' => 'nullable|string|max:255',
            'ptw_location_In_Charge_3' => 'nullable|string|max:255',
            'ptw_work_after_6pm_3' => 'nullable|string|max:255',
            'ptw_date_4' => 'nullable|string|max:255',
            'ptw_work_agency_4' => 'nullable|string|max:255',
            'ptw_receiver_4' => 'nullable|string|max:255',
            'ptw_location_In_Charge_4' => 'nullable|string|max:255',
            'ptw_work_after_6pm_4' => 'nullable|string|max:255',
        ];
    }
}
