<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExcavatorChecklistRequest extends FormRequest
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
            'excavator_des_1'  => 'nullable|string',
            'excavator_des_2'  => 'nullable|string',
            'excavator_des_3'  => 'nullable|string',
            'excavator_des_4'  => 'nullable|string',
            'excavator_des_5'  => 'nullable|string',
            'excavator_des_6'  => 'nullable|string',
            'excavator_des_7'  => 'nullable|string',
            'excavator_des_8'  => 'nullable|string',
            'excavator_des_9'  => 'nullable|string',
            'excavator_des_10'  => 'nullable|string',
            'excavator_des_11'  => 'nullable|string',
            'excavator_des_12'  => 'nullable|string',
            'excavator_des_13'  => 'nullable|string',
            'excavator_des_14'  => 'nullable|string',
            'is_excavator_1'  => 'nullable|string',
            'is_excavator_2'  => 'nullable|string',
            'is_excavator_3'  => 'nullable|string',
            'is_excavator_4'  => 'nullable|string',
            'is_excavator_5'  => 'nullable|string',
            'is_excavator_6'  => 'nullable|string',
            'is_excavator_7'  => 'nullable|string',
            'is_excavator_8'  => 'nullable|string',
            'is_excavator_9'  => 'nullable|string',
            'is_excavator_10'  => 'nullable|string',
            'is_excavator_11'  => 'nullable|string',
            'is_excavator_12'  => 'nullable|string',
            'is_excavator_13'  => 'nullable|string',
            'is_excavator_14'  => 'nullable|string',
            'excavator_remarks_1'  => 'nullable|string',
            'excavator_remarks_2'  => 'nullable|string',
            'excavator_remarks_3'  => 'nullable|string',
            'excavator_remarks_4'  => 'nullable|string',
            'excavator_remarks_5'  => 'nullable|string',
            'excavator_remarks_6'  => 'nullable|string',
            'excavator_remarks_7'  => 'nullable|string',
            'excavator_remarks_8'  => 'nullable|string',
            'excavator_remarks_9'  => 'nullable|string',
            'excavator_remarks_10'  => 'nullable|string',
            'excavator_remarks_11'  => 'nullable|string',
            'excavator_remarks_12'  => 'nullable|string',
            'excavator_remarks_13'  => 'nullable|string',
            'excavator_remarks_14'  => 'nullable|string',
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
