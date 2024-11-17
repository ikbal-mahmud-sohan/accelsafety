<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHseAccidentNotificationRequest extends FormRequest
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
            'plant_name' => 'required|string|max:255',
            'date_of_accident' => 'required|string|max:255',
            'shift' => 'required|string|max:255',
            'location_of_accident' => 'required|string|max:255',
            'pn_time' => 'required|string|max:255',
            'no_of_people_injured' => 'required|string|max:255',
            'nature_of_accident' => 'required|string|max:255',
            'injured_party_name' => 'required|string|max:255',
            'injured_party_address' => 'required|string|max:255',
            'injured_party_job_title' => 'required|string|max:255',
            'injured_party_mobile_no' => 'required|string|max:255',
            'injured_party_victim_type' => 'required|string|max:255',
            'injured_party_effected_body' => 'required|string|max:255',
            'injured_party_department' => 'required|string|max:255',
            'injured_party_age' => 'required|string|max:255',
            'injured_party_type_Injury' => 'required|string|max:255',
            'brief_description_of_incident' => 'required|string|max:255',
            'action_first_Aid_hospitalization' => 'required|string|max:255',
            'name_of_shift_in_charge' => 'required|string|max:255',
            'injured_party_designation' => 'required|string|max:255',
            'injured_party_mobile' => 'required|string|max:255',
        ];
    }
}
