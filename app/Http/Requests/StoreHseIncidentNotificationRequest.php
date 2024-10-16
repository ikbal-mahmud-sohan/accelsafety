<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseIncidentNotificationRequest extends FormRequest
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
            'shift_incharge_facility_name' => 'required|string|max:255',
            'shift_incharge_date_of_incident' => 'required|string|max:255',
            'shift_incharge_time' => 'required|string|max:255',
            'shift_incharge_shift' => 'required|string|max:255',
            'shift_incharge_location_of_incident' => 'required|string|max:255',
            'involved_party_name' => 'required|string|max:255',
            'involved_party_department' => 'required|string|max:255',
            'involved_party_job_title' => 'required|string|max:255',
            'involved_party_property_damaged' => 'required|string|max:255',
            'involved_party_employee_id' => 'required|string|max:255',
            'involved_party_age' => 'required|string|max:255',
            'involved_party_mobile_no' => 'required|string|max:255',
            'involved_party_property_name' => 'required|string|max:255',
            'involved_party_adress' => 'required|string|max:255',
            'involved_party_approximate_cost' => 'required|string|max:255',
            'brief_description' => 'required|string|max:255',
            'immediate_action_taken' => 'required|string|max:255',
            'name_of_shift_in_charge' => 'required|string|max:255',
            'name_of_shift_in_charge_mobile' => 'required|string|max:255',
            'list_of_witness_name_1' => 'rnullable|string',
            'list_of_witness_designation_1' => 'rnullable|string',
            'list_of_witness_phone_number_1' => 'rnullable|string',
            'list_of_witness_name_2' => 'rnullable|string',
            'list_of_witness_designation_2' => 'rnullable|string',
            'list_of_witness_phone_number_2' => 'rnullable|string',
            'comment_if_any' => 'nullable|string',
        ];
    }
}
