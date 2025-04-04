<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePortableGrinderRequest extends FormRequest
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
            'portable_grinder_des_1' => 'nullable|string',
            'portable_grinder_des_2' => 'nullable|string',
            'portable_grinder_des_3' => 'nullable|string',
            'portable_grinder_des_4' => 'nullable|string',
            'portable_grinder_des_5' => 'nullable|string',
            'portable_grinder_des_6' => 'nullable|string',
            'portable_grinder_des_7' => 'nullable|string',
            'portable_grinder_des_8' => 'nullable|string',
            'portable_grinder_des_9' => 'nullable|string',
            'portable_grinder_des_10' => 'nullable|string',
            'portable_grinder_des_11' => 'nullable|string',
            'portable_grinder_des_12' => 'nullable|string',
            'is_portable_grinder_1' => 'nullable|string',
            'is_portable_grinder_2' => 'nullable|string',
            'is_portable_grinder_3' => 'nullable|string',
            'is_portable_grinder_4' => 'nullable|string',
            'is_portable_grinder_5' => 'nullable|string',
            'is_portable_grinder_6' => 'nullable|string',
            'is_portable_grinder_7' => 'nullable|string',
            'is_portable_grinder_8' => 'nullable|string',
            'is_portable_grinder_9' => 'nullable|string',
            'is_portable_grinder_10' => 'nullable|string',
            'is_portable_grinder_11' => 'nullable|string',
            'is_portable_grinder_12' => 'nullable|string',
            'portable_grinder_remarks_1' => 'nullable|string',
            'portable_grinder_remarks_2' => 'nullable|string',
            'portable_grinder_remarks_3' => 'nullable|string',
            'portable_grinder_remarks_4' => 'nullable|string',
            'portable_grinder_remarks_5' => 'nullable|string',
            'portable_grinder_remarks_6' => 'nullable|string',
            'portable_grinder_remarks_7' => 'nullable|string',
            'portable_grinder_remarks_8' => 'nullable|string',
            'portable_grinder_remarks_9' => 'nullable|string',
            'portable_grinder_remarks_10' => 'nullable|string',
            'portable_grinder_remarks_11' => 'nullable|string',
            'portable_grinder_remarks_12' => 'nullable|string',
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
