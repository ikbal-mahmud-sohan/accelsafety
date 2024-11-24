<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHydraRequest extends FormRequest
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
            'hydra_des_1' => 'nullable|string',
            'hydra_des_2' => 'nullable|string',
            'hydra_des_3' => 'nullable|string',
            'hydra_des_4' => 'nullable|string',
            'hydra_des_5' => 'nullable|string',
            'hydra_des_6' => 'nullable|string',
            'hydra_des_7' => 'nullable|string',
            'hydra_des_8' => 'nullable|string',
            'hydra_des_9' => 'nullable|string',
            'hydra_des_10' => 'nullable|string',
            'hydra_des_11' => 'nullable|string',
            'hydra_des_12' => 'nullable|string',
            'hydra_des_13' => 'nullable|string',
            'hydra_des_14' => 'nullable|string',
            'hydra_des_15' => 'nullable|string',
            'hydra_des_16' => 'nullable|string',
            'is_hydra_1' => 'nullable|string',
            'is_hydra_2' => 'nullable|string',
            'is_hydra_3' => 'nullable|string',
            'is_hydra_4' => 'nullable|string',
            'is_hydra_5' => 'nullable|string',
            'is_hydra_6' => 'nullable|string',
            'is_hydra_7' => 'nullable|string',
            'is_hydra_8' => 'nullable|string',
            'is_hydra_9' => 'nullable|string',
            'is_hydra_10' => 'nullable|string',
            'is_hydra_11' => 'nullable|string',
            'is_hydra_12' => 'nullable|string',
            'is_hydra_13' => 'nullable|string',
            'is_hydra_14' => 'nullable|string',
            'is_hydra_15' => 'nullable|string',
            'is_hydra_16' => 'nullable|string',
            'hydra_remarks_1' => 'nullable|string',
            'hydra_remarks_2' => 'nullable|string',
            'hydra_remarks_3' => 'nullable|string',
            'hydra_remarks_4' => 'nullable|string',
            'hydra_remarks_5' => 'nullable|string',
            'hydra_remarks_6' => 'nullable|string',
            'hydra_remarks_7' => 'nullable|string',
            'hydra_remarks_8' => 'nullable|string',
            'hydra_remarks_9' => 'nullable|string',
            'hydra_remarks_10' => 'nullable|string',
            'hydra_remarks_11' => 'nullable|string',
            'hydra_remarks_12' => 'nullable|string',
            'hydra_remarks_13' => 'nullable|string',
            'hydra_remarks_14' => 'nullable|string',
            'hydra_remarks_15' => 'nullable|string',
            'hydra_remarks_16' => 'nullable|string',
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
