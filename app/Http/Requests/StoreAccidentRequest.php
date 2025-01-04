<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAccidentRequest extends FormRequest
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
            'date' => 'required',
            'is_required' => 'required|in:true,false,1,0',
            'type_of_accident' => 'required|string|max:255',
            'precise_location' => 'required|string|max:255',
            'injury_type' => 'required|string|max:255',
            'affected_body_parts' => 'required|string|max:255',
            'property_damaged' => 'required|in:true,false,1,0',
            'root_cause' => 'required|string',
            'action' => 'required|string',
            'days_lost' => 'required|integer',
            'type_of_victim_employee' => 'required|string|max:255',
            'responsible_name' => 'required|string|max:255',
            'site_name' => 'required|string|max:255',
            'immidiate_cause' => 'required|string',
            'incident_location' => 'required|string|max:255',
            'investigation_lead' => 'required|string|max:255',
            'attachment' => 'sometimes|array',
            'attachment.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ];
    }
}
