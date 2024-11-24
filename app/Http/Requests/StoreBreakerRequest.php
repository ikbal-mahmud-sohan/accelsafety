<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBreakerRequest extends FormRequest
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
            'breaker_des_1' => 'nullable|string',
            'breaker_des_2' => 'nullable|string',
            'breaker_des_3' => 'nullable|string',
            'breaker_des_4' => 'nullable|string',
            'breaker_des_5' => 'nullable|string',
            'breaker_des_6' => 'nullable|string',
            'breaker_des_7' => 'nullable|string',
            'is_breaker_1' => 'nullable|string',
            'is_breaker_2' => 'nullable|string',
            'is_breaker_3' => 'nullable|string',
            'is_breaker_4' => 'nullable|string',
            'is_breaker_5' => 'nullable|string',
            'is_breaker_6' => 'nullable|string',
            'is_breaker_7' => 'nullable|string',
            'breaker_remarks_1' => 'nullable|string',
            'breaker_remarks_2' => 'nullable|string',
            'breaker_remarks_3' => 'nullable|string',
            'breaker_remarks_4' => 'nullable|string',
            'breaker_remarks_5' => 'nullable|string',
            'breaker_remarks_6' => 'nullable|string',
            'breaker_remarks_7' => 'nullable|string',
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
