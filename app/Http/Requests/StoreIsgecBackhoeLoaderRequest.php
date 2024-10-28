<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIsgecBackhoeLoaderRequest extends FormRequest
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
            'project_name' => 'nullable|string|max:255',
            'project_code' => 'nullable|string|max:255',
            'checklist_no' => 'nullable|string|max:255',
            'date' => 'nullable|string|max:255',
            'make' => 'nullable|string|max:255',
            'model' => 'nullable|string|max:255',
            'isgec' => 'nullable|boolean',
            'hired' => 'nullable|boolean',
            'contractor' => 'nullable|boolean',
            'is_des_1' => 'nullable|boolean',
            'des_remarks_1' => 'nullable|string|max:255',
            'is_des_2' => 'nullable|boolean',
            'des_remarks_2' => 'nullable|string|max:255',
            'is_des_3' => 'nullable|boolean',
            'des_remarks_3' => 'nullable|string|max:255',
            'is_des_4' => 'nullable|boolean',
            'des_remarks_4' => 'nullable|string|max:255',
            'is_des_5' => 'nullable|boolean',
            'des_remarks_5' => 'nullable|string|max:255',
            'is_des_6' => 'nullable|boolean',
            'des_remarks_6' => 'nullable|string|max:255',
            'is_des_7' => 'nullable|boolean',
            'des_remarks_7' => 'nullable|string|max:255',
            'is_des_8' => 'nullable|boolean',
            'des_remarks_8' => 'nullable|string|max:255',
            'is_des_9' => 'nullable|boolean',
            'des_remarks_9' => 'nullable|string|max:255',
            'is_des_10' => 'nullable|boolean',
            'des_remarks_10' => 'nullable|string|max:255',
            'is_des_11' => 'nullable|boolean',
            'des_remarks_11' => 'nullable|string|max:255',
            'is_des_12' => 'nullable|boolean',
            'des_remarks_12' => 'nullable|string|max:255',
            'is_des_13' => 'nullable|boolean',
            'des_remarks_13' => 'nullable|string|max:255',
            'is_des_14' => 'nullable|boolean',
            'des_remarks_14' => 'nullable|string|max:255',
            'is_fit' => 'nullable|boolean',
            'is_partially_fit' => 'nullable|boolean',
            'is_unfit' => 'nullable|boolean',
            'inspected_by_name' => 'nullable|string|max:255',
            'inspected_by_signature' => 'sometimes|array',
            'inspected_by_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'inspected_by_date' => 'nullable|string|max:255',
            'reviewed_by_name' => 'nullable|string|max:255',
            'reviewed_by_signature' => 'sometimes|array',
            'reviewed_by_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'reviewed_by_date' => 'nullable|string|max:255',
        ];
    }
}
