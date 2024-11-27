<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAmbulanceRequest extends FormRequest
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
            'project_name' => 'required|string',
            'project_code' => 'required|string',
            'checklist_no' => 'required|string',
            'date' => 'required|string',
            'make' => 'required|string',
            'model' => 'required|string',
            'isgec' => 'required|string',
            'ambulance_des_1' => 'nullable|string',
            'ambulance_des_2' => 'nullable|string',
            'ambulance_des_3' => 'nullable|string',
            'ambulance_des_4' => 'nullable|string',
            'ambulance_des_5' => 'nullable|string',
            'ambulance_des_6' => 'nullable|string',
            'ambulance_des_7' => 'nullable|string',
            'ambulance_des_8' => 'nullable|string',
            'ambulance_des_9' => 'nullable|string',
            'ambulance_des_10' => 'nullable|string',
            'ambulance_des_11' => 'nullable|string',
            'ambulance_des_12' => 'nullable|string',
            'ambulance_des_13' => 'nullable|string',
            'is_ambulance_1' => 'nullable|string',
            'is_ambulance_2' => 'nullable|string',
            'is_ambulance_3' => 'nullable|string',
            'is_ambulance_4' => 'nullable|string',
            'is_ambulance_5' => 'nullable|string',
            'is_ambulance_6' => 'nullable|string',
            'is_ambulance_7' => 'nullable|string',
            'is_ambulance_8' => 'nullable|string',
            'is_ambulance_9' => 'nullable|string',
            'is_ambulance_10' => 'nullable|string',
            'is_ambulance_11' => 'nullable|string',
            'is_ambulance_12' => 'nullable|string',
            'is_ambulance_13' => 'nullable|string',
            'ambulance_remarks_1' => 'nullable|string',
            'ambulance_remarks_2' => 'nullable|string',
            'ambulance_remarks_3' => 'nullable|string',
            'ambulance_remarks_4' => 'nullable|string',
            'ambulance_remarks_5' => 'nullable|string',
            'ambulance_remarks_6' => 'nullable|string',
            'ambulance_remarks_7' => 'nullable|string',
            'ambulance_remarks_8' => 'nullable|string',
            'ambulance_remarks_9' => 'nullable|string',
            'ambulance_remarks_10' => 'nullable|string',
            'ambulance_remarks_11' => 'nullable|string',
            'ambulance_remarks_12' => 'nullable|string',
            'ambulance_remarks_13' => 'nullable|string',
            'fit' => 'required|string',
            'checked_by' => 'nullable|string',
            'reviewed_by' => 'nullable|string',
            'checked_by_date' => 'nullable|string',
            'reviewed_by_date' => 'nullable|string',
            'checked_by_signature' => 'sometimes|array',
            'checked_by_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'reviewed_by_signature' => 'sometimes|array',
            'reviewed_by_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
