<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTowerCraneRequest extends FormRequest
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
            'tower_crane_des_1' => 'nullable|string',
            'tower_crane_des_2' => 'nullable|string',
            'tower_crane_des_3' => 'nullable|string',
            'tower_crane_des_4' => 'nullable|string',
            'tower_crane_des_5' => 'nullable|string',
            'tower_crane_des_6' => 'nullable|string',
            'tower_crane_des_7' => 'nullable|string',
            'tower_crane_des_8' => 'nullable|string',
            'tower_crane_des_9' => 'nullable|string',
            'tower_crane_des_10' => 'nullable|string',
            'tower_crane_des_11' => 'nullable|string',
            'tower_crane_des_12' => 'nullable|string',
            'tower_crane_des_13' => 'nullable|string',
            'tower_crane_des_14' => 'nullable|string',
            'tower_crane_des_15' => 'nullable|string',
            'tower_crane_des_16' => 'nullable|string',
            'tower_crane_des_17' => 'nullable|string',
            'tower_crane_des_18' => 'nullable|string',
            'tower_crane_des_19' => 'nullable|string',
            'is_tower_crane_1' => 'nullable|string',
            'is_tower_crane_2' => 'nullable|string',
            'is_tower_crane_3' => 'nullable|string',
            'is_tower_crane_4' => 'nullable|string',
            'is_tower_crane_5' => 'nullable|string',
            'is_tower_crane_6' => 'nullable|string',
            'is_tower_crane_7' => 'nullable|string',
            'is_tower_crane_8' => 'nullable|string',
            'is_tower_crane_9' => 'nullable|string',
            'is_tower_crane_10' => 'nullable|string',
            'is_tower_crane_11' => 'nullable|string',
            'is_tower_crane_12' => 'nullable|string',
            'is_tower_crane_13' => 'nullable|string',
            'is_tower_crane_14' => 'nullable|string',
            'is_tower_crane_15' => 'nullable|string',
            'is_tower_crane_16' => 'nullable|string',
            'is_tower_crane_17' => 'nullable|string',
            'is_tower_crane_18' => 'nullable|string',
            'is_tower_crane_19' => 'nullable|string',
            'tower_crane_remarks_1' => 'nullable|string',
            'tower_crane_remarks_2' => 'nullable|string',
            'tower_crane_remarks_3' => 'nullable|string',
            'tower_crane_remarks_4' => 'nullable|string',
            'tower_crane_remarks_5' => 'nullable|string',
            'tower_crane_remarks_6' => 'nullable|string',
            'tower_crane_remarks_7' => 'nullable|string',
            'tower_crane_remarks_8' => 'nullable|string',
            'tower_crane_remarks_9' => 'nullable|string',
            'tower_crane_remarks_10' => 'nullable|string',
            'tower_crane_remarks_11' => 'nullable|string',
            'tower_crane_remarks_12' => 'nullable|string',
            'tower_crane_remarks_13' => 'nullable|string',
            'tower_crane_remarks_14' => 'nullable|string',
            'tower_crane_remarks_15' => 'nullable|string',
            'tower_crane_remarks_16' => 'nullable|string',
            'tower_crane_remarks_17' => 'nullable|string',
            'tower_crane_remarks_18' => 'nullable|string',
            'tower_crane_remarks_19' => 'nullable|string',
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
