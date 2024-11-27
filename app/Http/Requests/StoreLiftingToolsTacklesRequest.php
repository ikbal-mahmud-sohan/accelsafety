<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLiftingToolsTacklesRequest extends FormRequest
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
            'lifting_tools_des_1' => 'nullable|string',
            'lifting_tools_des_2' => 'nullable|string',
            'lifting_tools_des_3' => 'nullable|string',
            'lifting_tools_des_4' => 'nullable|string',
            'lifting_tools_des_5' => 'nullable|string',
            'lifting_tools_des_6' => 'nullable|string',
            'lifting_tools_des_7' => 'nullable|string',
            'lifting_tools_des_8' => 'nullable|string',
            'lifting_tools_des_9' => 'nullable|string',
            'is_lifting_tools_1' => 'nullable|string',
            'is_lifting_tools_2' => 'nullable|string',
            'is_lifting_tools_3' => 'nullable|string',
            'is_lifting_tools_4' => 'nullable|string',
            'is_lifting_tools_5' => 'nullable|string',
            'is_lifting_tools_6' => 'nullable|string',
            'is_lifting_tools_7' => 'nullable|string',
            'is_lifting_tools_8' => 'nullable|string',
            'is_lifting_tools_9' => 'nullable|string',
            'lifting_tools_remarks_1' => 'nullable|string',
            'lifting_tools_remarks_2' => 'nullable|string',
            'lifting_tools_remarks_3' => 'nullable|string',
            'lifting_tools_remarks_4' => 'nullable|string',
            'lifting_tools_remarks_5' => 'nullable|string',
            'lifting_tools_remarks_6' => 'nullable|string',
            'lifting_tools_remarks_7' => 'nullable|string',
            'lifting_tools_remarks_8' => 'nullable|string',
            'lifting_tools_remarks_9' => 'nullable|string',
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
