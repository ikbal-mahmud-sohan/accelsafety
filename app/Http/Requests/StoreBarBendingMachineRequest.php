<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBarBendingMachineRequest extends FormRequest
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
            'bar_bending_des_1' => 'nullable|string',
            'bar_bending_des_2' => 'nullable|string',
            'bar_bending_des_3' => 'nullable|string',
            'bar_bending_des_4' => 'nullable|string',
            'bar_bending_des_5' => 'nullable|string',
            'bar_bending_des_6' => 'nullable|string',
            'bar_bending_des_7' => 'nullable|string',
            'bar_bending_des_8' => 'nullable|string',
            'bar_bending_des_9' => 'nullable|string',
            'bar_bending_des_10' => 'nullable|string',
            'is_bar_bending_1' => 'nullable|string',
            'is_bar_bending_2' => 'nullable|string',
            'is_bar_bending_3' => 'nullable|string',
            'is_bar_bending_4' => 'nullable|string',
            'is_bar_bending_5' => 'nullable|string',
            'is_bar_bending_6' => 'nullable|string',
            'is_bar_bending_7' => 'nullable|string',
            'is_bar_bending_8' => 'nullable|string',
            'is_bar_bending_9' => 'nullable|string',
            'is_bar_bending_10' => 'nullable|string',
            'bar_bending_remarks_1' => 'nullable|string',
            'bar_bending_remarks_2' => 'nullable|string',
            'bar_bending_remarks_3' => 'nullable|string',
            'bar_bending_remarks_4' => 'nullable|string',
            'bar_bending_remarks_5' => 'nullable|string',
            'bar_bending_remarks_6' => 'nullable|string',
            'bar_bending_remarks_7' => 'nullable|string',
            'bar_bending_remarks_8' => 'nullable|string',
            'bar_bending_remarks_9' => 'nullable|string',
            'bar_bending_remarks_10' => 'nullable|string',
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
