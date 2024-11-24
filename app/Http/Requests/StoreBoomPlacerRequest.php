<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBoomPlacerRequest extends FormRequest
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
            'boom_placer_des_1' => 'nullable|string',
            'boom_placer_des_2' => 'nullable|string',
            'boom_placer_des_3' => 'nullable|string',
            'boom_placer_des_4' => 'nullable|string',
            'boom_placer_des_5' => 'nullable|string',
            'boom_placer_des_6' => 'nullable|string',
            'boom_placer_des_7' => 'nullable|string',
            'boom_placer_des_8' => 'nullable|string',
            'boom_placer_des_9' => 'nullable|string',
            'boom_placer_des_10' => 'nullable|string',
            'boom_placer_des_11' => 'nullable|string',
            'boom_placer_des_12' => 'nullable|string',
            'boom_placer_des_13' => 'nullable|string',
            'boom_placer_des_14' => 'nullable|string',
            'boom_placer_des_15' => 'nullable|string',
            'boom_placer_des_16' => 'nullable|string',
            'boom_placer_des_17' => 'nullable|string',
            'boom_placer_des_18' => 'nullable|string',
            'is_boom_placer_1' => 'nullable|string',
            'is_boom_placer_2' => 'nullable|string',
            'is_boom_placer_3' => 'nullable|string',
            'is_boom_placer_4' => 'nullable|string',
            'is_boom_placer_5' => 'nullable|string',
            'is_boom_placer_6' => 'nullable|string',
            'is_boom_placer_7' => 'nullable|string',
            'is_boom_placer_8' => 'nullable|string',
            'is_boom_placer_9' => 'nullable|string',
            'is_boom_placer_10' => 'nullable|string',
            'is_boom_placer_11' => 'nullable|string',
            'is_boom_placer_12' => 'nullable|string',
            'is_boom_placer_13' => 'nullable|string',
            'is_boom_placer_14' => 'nullable|string',
            'is_boom_placer_15' => 'nullable|string',
            'is_boom_placer_16' => 'nullable|string',
            'is_boom_placer_17' => 'nullable|string',
            'is_boom_placer_18' => 'nullable|string',
            'boom_placer_remarks_1' => 'nullable|string',
            'boom_placer_remarks_2' => 'nullable|string',
            'boom_placer_remarks_3' => 'nullable|string',
            'boom_placer_remarks_4' => 'nullable|string',
            'boom_placer_remarks_5' => 'nullable|string',
            'boom_placer_remarks_6' => 'nullable|string',
            'boom_placer_remarks_7' => 'nullable|string',
            'boom_placer_remarks_8' => 'nullable|string',
            'boom_placer_remarks_9' => 'nullable|string',
            'boom_placer_remarks_10' => 'nullable|string',
            'boom_placer_remarks_11' => 'nullable|string',
            'boom_placer_remarks_12' => 'nullable|string',
            'boom_placer_remarks_13' => 'nullable|string',
            'boom_placer_remarks_14' => 'nullable|string',
            'boom_placer_remarks_15' => 'nullable|string',
            'boom_placer_remarks_16' => 'nullable|string',
            'boom_placer_remarks_17' => 'nullable|string',
            'boom_placer_remarks_18' => 'nullable|string',
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
