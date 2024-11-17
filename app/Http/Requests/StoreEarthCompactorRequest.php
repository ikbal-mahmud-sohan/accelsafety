<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEarthCompactorRequest extends FormRequest
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
            'compactor_des_1' => 'nullable|string',
            'compactor_des_2' => 'nullable|string',
            'compactor_des_3' => 'nullable|string',
            'compactor_des_4' => 'nullable|string',
            'compactor_des_5' => 'nullable|string',
            'compactor_des_6' => 'nullable|string',
            'compactor_des_7' => 'nullable|string',
            'compactor_des_8' => 'nullable|string',
            'compactor_des_9' => 'nullable|string',
            'compactor_des_10' => 'nullable|string',
            'compactor_des_11' => 'nullable|string',
            'is_compactor_1' => 'nullable|string',
            'is_compactor_2' => 'nullable|string',
            'is_compactor_3' => 'nullable|string',
            'is_compactor_4' => 'nullable|string',
            'is_compactor_5' => 'nullable|string',
            'is_compactor_6' => 'nullable|string',
            'is_compactor_7' => 'nullable|string',
            'is_compactor_8' => 'nullable|string',
            'is_compactor_9' => 'nullable|string',
            'is_compactor_10' => 'nullable|string',
            'is_compactor_11' => 'nullable|string',
            'compactor_remarks_1' => 'nullable|string',
            'compactor_remarks_2' => 'nullable|string',
            'compactor_remarks_3' => 'nullable|string',
            'compactor_remarks_4' => 'nullable|string',
            'compactor_remarks_5' => 'nullable|string',
            'compactor_remarks_6' => 'nullable|string',
            'compactor_remarks_7' => 'nullable|string',
            'compactor_remarks_8' => 'nullable|string',
            'compactor_remarks_9' => 'nullable|string',
            'compactor_remarks_10' => 'nullable|string',
            'compactor_remarks_11' => 'nullable|string',
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
