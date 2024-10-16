<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseAccidentRegisterRequest extends FormRequest
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
            'date' => 'required|string|max:255',
            'types_of_accident' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'victims_name_with_position' => 'required|string|max:255',
            'type_of_employee' => 'required|string|max:255',
            'description_of_accident' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'effected_body_part' => 'required|string|max:255',
            'type_of_injury' => 'required|string|max:255',
            'immediate_cause' => 'required|string|max:255',
            'immediate_action_taken' => 'required|string|max:255',
            'investigation_report' => 'required|string|max:255',
            'action_party_with_position' => 'required|string|max:255',
            'time_frame' => 'required|string|max:255',
        ];
    }
}
