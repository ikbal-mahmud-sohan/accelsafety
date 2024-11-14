<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConcretePumpRequest extends FormRequest
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
            'concrete_pumps_des_1' => 'nullable|string',
            'concrete_pumps_des_2' => 'nullable|string',
            'concrete_pumps_des_3' => 'nullable|string',
            'concrete_pumps_des_4' => 'nullable|string',
            'concrete_pumps_des_5' => 'nullable|string',
            'concrete_pumps_des_6' => 'nullable|string',
            'concrete_pumps_des_7' => 'nullable|string',
            'concrete_pumps_des_8' => 'nullable|string',
            'concrete_pumps_des_9' => 'nullable|string',
            'concrete_pumps_des_10' => 'nullable|string',
            'concrete_pumps_des_11' => 'nullable|string',
            'concrete_pumps_des_12' => 'nullable|string',
            'concrete_pumps_des_13' => 'nullable|string',
            'concrete_pumps_des_14' => 'nullable|string',
            'is_concrete_pumps_1' => 'nullable|string',
            'is_concrete_pumps_2' => 'nullable|string',
            'is_concrete_pumps_3' => 'nullable|string',
            'is_concrete_pumps_4' => 'nullable|string',
            'is_concrete_pumps_5' => 'nullable|string',
            'is_concrete_pumps_6' => 'nullable|string',
            'is_concrete_pumps_7' => 'nullable|string',
            'is_concrete_pumps_8' => 'nullable|string',
            'is_concrete_pumps_9' => 'nullable|string',
            'is_concrete_pumps_10' => 'nullable|string',
            'is_concrete_pumps_11' => 'nullable|string',
            'is_concrete_pumps_12' => 'nullable|string',
            'is_concrete_pumps_13' => 'nullable|string',
            'is_concrete_pumps_14' => 'nullable|string',
            'concrete_pumps_remarks_1' => 'nullable|string',
            'concrete_pumps_remarks_2' => 'nullable|string',
            'concrete_pumps_remarks_3' => 'nullable|string',
            'concrete_pumps_remarks_4' => 'nullable|string',
            'concrete_pumps_remarks_5' => 'nullable|string',
            'concrete_pumps_remarks_6' => 'nullable|string',
            'concrete_pumps_remarks_7' => 'nullable|string',
            'concrete_pumps_remarks_8' => 'nullable|string',
            'concrete_pumps_remarks_9' => 'nullable|string',
            'concrete_pumps_remarks_10' => 'nullable|string',
            'concrete_pumps_remarks_11' => 'nullable|string',
            'concrete_pumps_remarks_12' => 'nullable|string',
            'concrete_pumps_remarks_13' => 'nullable|string',
            'concrete_pumps_remarks_14' => 'nullable|string',
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
