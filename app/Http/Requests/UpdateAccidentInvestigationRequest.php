<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAccidentInvestigationRequest extends FormRequest
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
            'type_of_employee' => 'nullable|array',
            'type_of_employee.*' => 'string|max:255',
            'type_of_accident' => 'nullable|array',
            'type_of_accident.*' => 'string|max:255',
            'nature_of_injury' => 'nullable|array',
            'nature_of_injury.*' => 'string|max:255',
            'employee_id' => ['required', 'exists:employee_infos,id'],
            'employee_department' => 'required|string|max:255',
            'accident_details' => 'required|string',
            'unsafe_acts' => 'nullable|array',
            'unsafe_acts.*' => 'string|max:255',
            'unsafe_conditions' => 'nullable|array',
            'unsafe_conditions.*' => 'string|max:255',
            'management_deficiencies' => 'nullable|array',
            'management_deficiencies.*' => 'string|max:255',
            'root_cause_1' => 'required|string|max:255',
            'corrective_action_1' => 'required|string|max:255',
            'person_assigned_1' => 'required|string|max:255',
            'target_date_1' => 'required|date',
            'complete_date_1' => 'nullable|date',
            'root_cause_2' => 'nullable|string|max:255',
            'corrective_action_2' => 'nullable|string|max:255',
            'person_assigned_2' => 'nullable|string|max:255',
            'target_date_2' => 'nullable|date',
            'complete_date_2' => 'nullable|date',
            'root_cause_3' => 'nullable|string|max:255',
            'corrective_action_3' => 'nullable|string|max:255',
            'person_assigned_3' => 'nullable|string|max:255',
            'target_date_3' => 'nullable|date',
            'complete_date_3' => 'nullable|date',
            'reviewed_by_department_name' => 'required|string|max:255',
            'reviewed_by_unit_name' => 'required|string|max:255',
            'approved_by_name' => 'required|string|max:255',
            'reviewed_by_unit_signature' => 'sometimes|array',
            'reviewed_by_unit_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'reviewed_by_department_signature' => 'sometimes|array',
            'reviewed_by_department_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'approved_by_signature' => 'sometimes|array',
            'approved_by_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name_of_the_factory' => 'string|max:255',
            'date_of_accident' => 'string|max:255',
            'accident_time' => 'string|max:255',
            'accident_shift' => 'string|max:255',
            'effected_body_part' => 'string|max:255',
            'employee_job_title' => 'string|max:255',
            'employee_age' => 'string|max:255',
            'employee_phone_no' => 'string|max:255',
            'employee_address' => 'string|max:255',
            'employee_experience' => 'string|max:255',
            'area_in_charge_name' => 'string|max:255',
            'area_in_charge_phone_no' => 'string|max:255',
            'witness_name' => 'string|max:255',
            'witness_phone_no' => 'string|max:255',
            'accident_exact_location' => 'string|max:255',
            'accident_initiatives' => 'string|max:255',
            'unsafe_acts_why_therefore_1' => 'required|string|max:255',
            'unsafe_conditions_why_therefore_1' => 'required|string|max:255',
            'management_deficiency_why_therefore_1' => 'required|string|max:255',
            'unsafe_acts_why_therefore_2' => 'required|string|max:255',
            'unsafe_conditions_why_therefore_2' => 'required|string|max:255',
            'management_deficiency_why_therefore_2' => 'required|string|max:255',
            'unsafe_acts_why_therefore_3' => 'required|string|max:255',
            'unsafe_conditions_why_therefore_3' => 'required|string|max:255',
            'management_deficiency_why_therefore_3' => 'required|string|max:255',
            'unsafe_acts_why_therefore_4' => 'required|string|max:255',
            'unsafe_conditions_why_therefore_4' => 'required|string|max:255',
            'management_deficiency_why_therefore_4' => 'required|string|max:255',
            'unsafe_acts_why_therefore_5' => 'required|string|max:255',
            'unsafe_conditions_why_therefore_5' => 'required|string|max:255',
            'management_deficiency_why_therefore_5' => 'required|string|max:255',
            'unsafe_acts_title' => 'required|string|max:255',
            'unsafe_conditions_title' => 'required|string|max:255',
            'management_deficiency_title' => 'required|string|max:255',
            'root_cause_des1' => 'required|string|max:255',
            'root_cause_des2' => 'required|string|max:255',
            'root_cause_des3' => 'required|string|max:255',
        ];
    }
}
