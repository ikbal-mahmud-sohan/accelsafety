<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSkidSteerLoaderRequest extends FormRequest
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
            'skid_steer_des_1' => 'nullable|string',
            'skid_steer_des_2' => 'nullable|string',
            'skid_steer_des_3' => 'nullable|string',
            'skid_steer_des_4' => 'nullable|string',
            'skid_steer_des_5' => 'nullable|string',
            'skid_steer_des_6' => 'nullable|string',
            'skid_steer_des_7' => 'nullable|string',
            'skid_steer_des_8' => 'nullable|string',
            'skid_steer_des_9' => 'nullable|string',
            'skid_steer_des_10' => 'nullable|string',
            'skid_steer_des_11' => 'nullable|string',
            'skid_steer_des_12' => 'nullable|string',
            'skid_steer_des_13' => 'nullable|string',
            'is_skid_steer_1' => 'nullable|string',
            'is_skid_steer_2' => 'nullable|string',
            'is_skid_steer_3' => 'nullable|string',
            'is_skid_steer_4' => 'nullable|string',
            'is_skid_steer_5' => 'nullable|string',
            'is_skid_steer_6' => 'nullable|string',
            'is_skid_steer_7' => 'nullable|string',
            'is_skid_steer_8' => 'nullable|string',
            'is_skid_steer_9' => 'nullable|string',
            'is_skid_steer_10' => 'nullable|string',
            'is_skid_steer_11' => 'nullable|string',
            'is_skid_steer_12' => 'nullable|string',
            'is_skid_steer_13' => 'nullable|string',
            'skid_steer_remarks_1' => 'nullable|string',
            'skid_steer_remarks_2' => 'nullable|string',
            'skid_steer_remarks_3' => 'nullable|string',
            'skid_steer_remarks_4' => 'nullable|string',
            'skid_steer_remarks_5' => 'nullable|string',
            'skid_steer_remarks_6' => 'nullable|string',
            'skid_steer_remarks_7' => 'nullable|string',
            'skid_steer_remarks_8' => 'nullable|string',
            'skid_steer_remarks_9' => 'nullable|string',
            'skid_steer_remarks_10' => 'nullable|string',
            'skid_steer_remarks_11' => 'nullable|string',
            'skid_steer_remarks_12' => 'nullable|string',
            'skid_steer_remarks_13' => 'nullable|string',
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
