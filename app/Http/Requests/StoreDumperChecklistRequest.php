<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDumperChecklistRequest extends FormRequest
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
            'dumper_des_1' => 'nullable|string',
            'dumper_des_2' => 'nullable|string',
            'dumper_des_3' => 'nullable|string',
            'dumper_des_4' => 'nullable|string',
            'dumper_des_5' => 'nullable|string',
            'dumper_des_6' => 'nullable|string',
            'dumper_des_7' => 'nullable|string',
            'dumper_des_8' => 'nullable|string',
            'dumper_des_9' => 'nullable|string',
            'dumper_des_10' => 'nullable|string',
            'dumper_des_11' => 'nullable|string',
            'dumper_des_12' => 'nullable|string',
            'dumper_des_13' => 'nullable|string',
            'dumper_des_14' => 'nullable|string',
            'dumper_des_15' => 'nullable|string',
            'dumper_des_16' => 'nullable|string',
            'is_dumper_1' => 'nullable|string',
            'is_dumper_2' => 'nullable|string',
            'is_dumper_3' => 'nullable|string',
            'is_dumper_4' => 'nullable|string',
            'is_dumper_5' => 'nullable|string',
            'is_dumper_6' => 'nullable|string',
            'is_dumper_7' => 'nullable|string',
            'is_dumper_8' => 'nullable|string',
            'is_dumper_9' => 'nullable|string',
            'is_dumper_10' => 'nullable|string',
            'is_dumper_11' => 'nullable|string',
            'is_dumper_12' => 'nullable|string',
            'is_dumper_13' => 'nullable|string',
            'is_dumper_14' => 'nullable|string',
            'is_dumper_15' => 'nullable|string',
            'is_dumper_16' => 'nullable|string',
            'dumper_remarks_1' => 'nullable|string',
            'dumper_remarks_2' => 'nullable|string',
            'dumper_remarks_3' => 'nullable|string',
            'dumper_remarks_4' => 'nullable|string',
            'dumper_remarks_5' => 'nullable|string',
            'dumper_remarks_6' => 'nullable|string',
            'dumper_remarks_7' => 'nullable|string',
            'dumper_remarks_8' => 'nullable|string',
            'dumper_remarks_9' => 'nullable|string',
            'dumper_remarks_10' => 'nullable|string',
            'dumper_remarks_11' => 'nullable|string',
            'dumper_remarks_12' => 'nullable|string',
            'dumper_remarks_13' => 'nullable|string',
            'dumper_remarks_14' => 'nullable|string',
            'dumper_remarks_15' => 'nullable|string',
            'dumper_remarks_16' => 'nullable|string',
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
