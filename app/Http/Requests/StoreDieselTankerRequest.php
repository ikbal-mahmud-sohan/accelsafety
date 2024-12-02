<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDieselTankerRequest extends FormRequest
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
            'diesel_tanker_des_1' => 'nullable|string',
            'diesel_tanker_des_2' => 'nullable|string',
            'diesel_tanker_des_3' => 'nullable|string',
            'diesel_tanker_des_4' => 'nullable|string',
            'diesel_tanker_des_5' => 'nullable|string',
            'diesel_tanker_des_6' => 'nullable|string',
            'diesel_tanker_des_7' => 'nullable|string',
            'diesel_tanker_des_8' => 'nullable|string',
            'diesel_tanker_des_9' => 'nullable|string',
            'diesel_tanker_des_10' => 'nullable|string',
            'diesel_tanker_des_11' => 'nullable|string',
            'diesel_tanker_des_12' => 'nullable|string',
            'diesel_tanker_des_13' => 'nullable|string',
            'diesel_tanker_des_14' => 'nullable|string',
            'diesel_tanker_des_15' => 'nullable|string',
            'diesel_tanker_des_16' => 'nullable|string',
            'diesel_tanker_des_17' => 'nullable|string',
            'diesel_tanker_des_18' => 'nullable|string',
            'diesel_tanker_des_19' => 'nullable|string',
            'is_diesel_tanker_1' => 'nullable|string',
            'is_diesel_tanker_2' => 'nullable|string',
            'is_diesel_tanker_3' => 'nullable|string',
            'is_diesel_tanker_4' => 'nullable|string',
            'is_diesel_tanker_5' => 'nullable|string',
            'is_diesel_tanker_6' => 'nullable|string',
            'is_diesel_tanker_7' => 'nullable|string',
            'is_diesel_tanker_8' => 'nullable|string',
            'is_diesel_tanker_9' => 'nullable|string',
            'is_diesel_tanker_10' => 'nullable|string',
            'is_diesel_tanker_11' => 'nullable|string',
            'is_diesel_tanker_12' => 'nullable|string',
            'is_diesel_tanker_13' => 'nullable|string',
            'is_diesel_tanker_14' => 'nullable|string',
            'is_diesel_tanker_15' => 'nullable|string',
            'is_diesel_tanker_16' => 'nullable|string',
            'is_diesel_tanker_17' => 'nullable|string',
            'is_diesel_tanker_18' => 'nullable|string',
            'is_diesel_tanker_19' => 'nullable|string',
            'diesel_tanker_remarks_1' => 'nullable|string',
            'diesel_tanker_remarks_2' => 'nullable|string',
            'diesel_tanker_remarks_3' => 'nullable|string',
            'diesel_tanker_remarks_4' => 'nullable|string',
            'diesel_tanker_remarks_5' => 'nullable|string',
            'diesel_tanker_remarks_6' => 'nullable|string',
            'diesel_tanker_remarks_7' => 'nullable|string',
            'diesel_tanker_remarks_8' => 'nullable|string',
            'diesel_tanker_remarks_9' => 'nullable|string',
            'diesel_tanker_remarks_10' => 'nullable|string',
            'diesel_tanker_remarks_11' => 'nullable|string',
            'diesel_tanker_remarks_12' => 'nullable|string',
            'diesel_tanker_remarks_13' => 'nullable|string',
            'diesel_tanker_remarks_14' => 'nullable|string',
            'diesel_tanker_remarks_15' => 'nullable|string',
            'diesel_tanker_remarks_16' => 'nullable|string',
            'diesel_tanker_remarks_17' => 'nullable|string',
            'diesel_tanker_remarks_18' => 'nullable|string',
            'diesel_tanker_remarks_19' => 'nullable|string',
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
