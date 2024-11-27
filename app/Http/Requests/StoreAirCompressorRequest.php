<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAirCompressorRequest extends FormRequest
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
            'air_compressor_des_1' => 'nullable|string',
            'air_compressor_des_2' => 'nullable|string',
            'air_compressor_des_3' => 'nullable|string',
            'air_compressor_des_4' => 'nullable|string',
            'air_compressor_des_5' => 'nullable|string',
            'air_compressor_des_6' => 'nullable|string',
            'air_compressor_des_7' => 'nullable|string',
            'air_compressor_des_8' => 'nullable|string',
            'air_compressor_des_9' => 'nullable|string',
            'air_compressor_des_10' => 'nullable|string',
            'air_compressor_des_11' => 'nullable|string',
            'air_compressor_des_12' => 'nullable|string',
            'is_air_compressor_1' => 'nullable|string',
            'is_air_compressor_2' => 'nullable|string',
            'is_air_compressor_3' => 'nullable|string',
            'is_air_compressor_4' => 'nullable|string',
            'is_air_compressor_5' => 'nullable|string',
            'is_air_compressor_6' => 'nullable|string',
            'is_air_compressor_7' => 'nullable|string',
            'is_air_compressor_8' => 'nullable|string',
            'is_air_compressor_9' => 'nullable|string',
            'is_air_compressor_10' => 'nullable|string',
            'is_air_compressor_11' => 'nullable|string',
            'is_air_compressor_12' => 'nullable|string',
            'air_compressor_remarks_1' => 'nullable|string',
            'air_compressor_remarks_2' => 'nullable|string',
            'air_compressor_remarks_3' => 'nullable|string',
            'air_compressor_remarks_4' => 'nullable|string',
            'air_compressor_remarks_5' => 'nullable|string',
            'air_compressor_remarks_6' => 'nullable|string',
            'air_compressor_remarks_7' => 'nullable|string',
            'air_compressor_remarks_8' => 'nullable|string',
            'air_compressor_remarks_9' => 'nullable|string',
            'air_compressor_remarks_10' => 'nullable|string',
            'air_compressor_remarks_11' => 'nullable|string',
            'air_compressor_remarks_12' => 'nullable|string',
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
