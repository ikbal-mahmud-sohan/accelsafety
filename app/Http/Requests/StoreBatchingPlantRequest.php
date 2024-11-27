<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBatchingPlantRequest extends FormRequest
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
            'batching_plant_des_1' => 'nullable|string',
            'batching_plant_des_2' => 'nullable|string',
            'batching_plant_des_3' => 'nullable|string',
            'batching_plant_des_4' => 'nullable|string',
            'batching_plant_des_5' => 'nullable|string',
            'batching_plant_des_6' => 'nullable|string',
            'batching_plant_des_7' => 'nullable|string',
            'batching_plant_des_8' => 'nullable|string',
            'batching_plant_des_9' => 'nullable|string',
            'batching_plant_des_10' => 'nullable|string',
            'batching_plant_des_11' => 'nullable|string',
            'batching_plant_des_12' => 'nullable|string',
            'batching_plant_des_13' => 'nullable|string',
            'batching_plant_des_14' => 'nullable|string',
            'batching_plant_des_15' => 'nullable|string',
            'batching_plant_des_16' => 'nullable|string',
            'is_batching_plant_1' => 'nullable|string',
            'is_batching_plant_2' => 'nullable|string',
            'is_batching_plant_3' => 'nullable|string',
            'is_batching_plant_4' => 'nullable|string',
            'is_batching_plant_5' => 'nullable|string',
            'is_batching_plant_6' => 'nullable|string',
            'is_batching_plant_7' => 'nullable|string',
            'is_batching_plant_8' => 'nullable|string',
            'is_batching_plant_9' => 'nullable|string',
            'is_batching_plant_10' => 'nullable|string',
            'is_batching_plant_11' => 'nullable|string',
            'is_batching_plant_12' => 'nullable|string',
            'is_batching_plant_13' => 'nullable|string',
            'is_batching_plant_14' => 'nullable|string',
            'is_batching_plant_15' => 'nullable|string',
            'is_batching_plant_16' => 'nullable|string',
            'batching_plant_remarks_1' => 'nullable|string',
            'batching_plant_remarks_2' => 'nullable|string',
            'batching_plant_remarks_3' => 'nullable|string',
            'batching_plant_remarks_4' => 'nullable|string',
            'batching_plant_remarks_5' => 'nullable|string',
            'batching_plant_remarks_6' => 'nullable|string',
            'batching_plant_remarks_7' => 'nullable|string',
            'batching_plant_remarks_8' => 'nullable|string',
            'batching_plant_remarks_9' => 'nullable|string',
            'batching_plant_remarks_10' => 'nullable|string',
            'batching_plant_remarks_11' => 'nullable|string',
            'batching_plant_remarks_12' => 'nullable|string',
            'batching_plant_remarks_13' => 'nullable|string',
            'batching_plant_remarks_14' => 'nullable|string',
            'batching_plant_remarks_15' => 'nullable|string',
            'batching_plant_remarks_16' => 'nullable|string',
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
