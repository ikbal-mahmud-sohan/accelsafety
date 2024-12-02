<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrailerRequest extends FormRequest
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
            'trailer_des_1' => 'nullable|string',
            'trailer_des_2' => 'nullable|string',
            'trailer_des_3' => 'nullable|string',
            'trailer_des_4' => 'nullable|string',
            'trailer_des_5' => 'nullable|string',
            'trailer_des_6' => 'nullable|string',
            'trailer_des_7' => 'nullable|string',
            'trailer_des_8' => 'nullable|string',
            'trailer_des_9' => 'nullable|string',
            'trailer_des_10' => 'nullable|string',
            'trailer_des_11' => 'nullable|string',
            'trailer_des_12' => 'nullable|string',
            'trailer_des_13' => 'nullable|string',
            'trailer_des_14' => 'nullable|string',
            'trailer_des_15' => 'nullable|string',
            'is_trailer_1' => 'nullable|string',
            'is_trailer_2' => 'nullable|string',
            'is_trailer_3' => 'nullable|string',
            'is_trailer_4' => 'nullable|string',
            'is_trailer_5' => 'nullable|string',
            'is_trailer_6' => 'nullable|string',
            'is_trailer_7' => 'nullable|string',
            'is_trailer_8' => 'nullable|string',
            'is_trailer_9' => 'nullable|string',
            'is_trailer_10' => 'nullable|string',
            'is_trailer_11' => 'nullable|string',
            'is_trailer_12' => 'nullable|string',
            'is_trailer_13' => 'nullable|string',
            'is_trailer_14' => 'nullable|string',
            'is_trailer_15' => 'nullable|string',
            'trailer_remarks_1' => 'nullable|string',
            'trailer_remarks_2' => 'nullable|string',
            'trailer_remarks_3' => 'nullable|string',
            'trailer_remarks_4' => 'nullable|string',
            'trailer_remarks_5' => 'nullable|string',
            'trailer_remarks_6' => 'nullable|string',
            'trailer_remarks_7' => 'nullable|string',
            'trailer_remarks_8' => 'nullable|string',
            'trailer_remarks_9' => 'nullable|string',
            'trailer_remarks_10' => 'nullable|string',
            'trailer_remarks_11' => 'nullable|string',
            'trailer_remarks_12' => 'nullable|string',
            'trailer_remarks_13' => 'nullable|string',
            'trailer_remarks_14' => 'nullable|string',
            'trailer_remarks_15' => 'nullable|string',
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
