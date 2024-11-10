<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseSafetyChecklistHVRequest extends FormRequest
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
            'hv_des_1' => 'nullable|string|max:255',
            'is_hv_complied_1' => 'nullable|string|max:255',
            'hv_remarks_1' => 'nullable|string|max:255',
            'hv_des_2' => 'nullable|string|max:255',
            'is_hv_complied_2' => 'nullable|string|max:255',
            'hv_remarks_2' => 'nullable|string|max:255',
            'hv_des_3' => 'nullable|string|max:255',
            'is_hv_complied_3' => 'nullable|string|max:255',
            'hv_remarks_3' => 'nullable|string|max:255',
            'hv_des_4' => 'nullable|string|max:255',
            'is_hv_complied_4' => 'nullable|string|max:255',
            'hv_remarks_4' => 'nullable|string|max:255',
            'hv_des_5' => 'nullable|string|max:255',
            'is_hv_complied_5' => 'nullable|string|max:255',
            'hv_remarks_5' => 'nullable|string|max:255',
            'hv_des_6' => 'nullable|string|max:255',
            'is_hv_complied_6' => 'nullable|string|max:255',
            'hv_remarks_6' => 'nullable|string|max:255',
            'hv_des_7' => 'nullable|string|max:255',
            'is_hv_complied_7' => 'nullable|string|max:255',
            'hv_remarks_7' => 'nullable|string|max:255',
            'hv_des_8' => 'nullable|string|max:255',
            'is_hv_complied_8' => 'nullable|string|max:255',
            'hv_remarks_8' => 'nullable|string|max:255',
            'hv_des_9' => 'nullable|string|max:255',
            'is_hv_complied_9' => 'nullable|string|max:255',
            'hv_remarks_9' => 'nullable|string|max:255',
            'hv_des_10' => 'nullable|string|max:255',
            'is_hv_complied_10' => 'nullable|string|max:255',
            'hv_remarks_10' => 'nullable|string|max:255',
            'hv_des_11' => 'nullable|string|max:255',
            'is_hv_complied_11' => 'nullable|string|max:255',
            'hv_remarks_11' => 'nullable|string|max:255',
            'checked_by' => 'nullable|string|max:255',
            'reviewed_by' => 'nullable|string|max:255',
            'checked_by_date' => 'nullable|string|max:255',
            'reviewed_by_date' => 'nullable|string|max:255',
            'checked_by_signature' => 'sometimes|array',
            'checked_by_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'reviewed_by_signature' => 'sometimes|array',
            'reviewed_by_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
