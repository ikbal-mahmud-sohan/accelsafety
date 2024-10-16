<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseSafetyInspectionReportRequest extends FormRequest
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
            'location' => 'required|string|max:255',
            'date_of_inspection' => 'required|string|max:255',
            'ins_reports_des_1' => 'nullable|string',
            'ins_reports_des_2' => 'nullable|string',
            'ins_reports_des_3' => 'nullable|string',
            'ins_reports_des_4' => 'nullable|string',
            'ins_reports_des_5' => 'nullable|string',
            'ins_reports_des_6' => 'nullable|string',
            'ins_reports_des_7' => 'nullable|string',
            'ins_reports_des_8' => 'nullable|string',
            'ins_reports_des_9' => 'nullable|string',
            'ins_reports_des_10' => 'nullable|string',
            'ins_reports_des_11' => 'nullable|string',
            'ins_reports_des_12' => 'nullable|string',
            'ins_reports_des_13' => 'nullable|string',
            'ins_reports_des_remarks_1' => 'nullable|string',
            'ins_reports_des_remarks_2' => 'nullable|string',
            'ins_reports_des_remarks_3' => 'nullable|string',
            'ins_reports_des_remarks_4' => 'nullable|string',
            'ins_reports_des_remarks_5' => 'nullable|string',
            'ins_reports_des_remarks_6' => 'nullable|string',
            'ins_reports_des_remarks_7' => 'nullable|string',
            'ins_reports_des_remarks_8' => 'nullable|string',
            'ins_reports_des_remarks_9' => 'nullable|string',
            'ins_reports_des_remarks_10' => 'nullable|string',
            'ins_reports_des_remarks_11' => 'nullable|string',
            'ins_reports_des_remarks_12' => 'nullable|string',
            'ins_reports_des_remarks_13' => 'nullable|string',
            'name_of_inspector' => 'nullable|string',
            'designation' => 'nullable|string',
            'signature' => 'sometimes|array',
            'signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}

