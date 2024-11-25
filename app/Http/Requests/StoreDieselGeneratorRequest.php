<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDieselGeneratorRequest extends FormRequest
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
            'diesel_generator_des_1' => 'nullable|string',
            'diesel_generator_des_2' => 'nullable|string',
            'diesel_generator_des_3' => 'nullable|string',
            'diesel_generator_des_4' => 'nullable|string',
            'diesel_generator_des_5' => 'nullable|string',
            'diesel_generator_des_6' => 'nullable|string',
            'diesel_generator_des_7' => 'nullable|string',
            'diesel_generator_des_8' => 'nullable|string',
            'diesel_generator_des_9' => 'nullable|string',
            'diesel_generator_des_10' => 'nullable|string',
            'diesel_generator_des_11' => 'nullable|string',
            'diesel_generator_des_12' => 'nullable|string',
            'diesel_generator_des_13' => 'nullable|string',
            'diesel_generator_des_14' => 'nullable|string',
            'is_diesel_generator_1' => 'nullable|string',
            'is_diesel_generator_2' => 'nullable|string',
            'is_diesel_generator_3' => 'nullable|string',
            'is_diesel_generator_4' => 'nullable|string',
            'is_diesel_generator_5' => 'nullable|string',
            'is_diesel_generator_6' => 'nullable|string',
            'is_diesel_generator_7' => 'nullable|string',
            'is_diesel_generator_8' => 'nullable|string',
            'is_diesel_generator_9' => 'nullable|string',
            'is_diesel_generator_10' => 'nullable|string',
            'is_diesel_generator_11' => 'nullable|string',
            'is_diesel_generator_12' => 'nullable|string',
            'is_diesel_generator_13' => 'nullable|string',
            'is_diesel_generator_14' => 'nullable|string',
            'diesel_generator_remarks_1' => 'nullable|string',
            'diesel_generator_remarks_2' => 'nullable|string',
            'diesel_generator_remarks_3' => 'nullable|string',
            'diesel_generator_remarks_4' => 'nullable|string',
            'diesel_generator_remarks_5' => 'nullable|string',
            'diesel_generator_remarks_6' => 'nullable|string',
            'diesel_generator_remarks_7' => 'nullable|string',
            'diesel_generator_remarks_8' => 'nullable|string',
            'diesel_generator_remarks_9' => 'nullable|string',
            'diesel_generator_remarks_10' => 'nullable|string',
            'diesel_generator_remarks_11' => 'nullable|string',
            'diesel_generator_remarks_12' => 'nullable|string',
            'diesel_generator_remarks_13' => 'nullable|string',
            'diesel_generator_remarks_14' => 'nullable|string',
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
