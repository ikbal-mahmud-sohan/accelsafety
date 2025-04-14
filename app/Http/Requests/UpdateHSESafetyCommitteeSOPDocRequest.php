<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHSESafetyCommitteeSOPDocRequest extends FormRequest
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
            'descriptions' => 'required|string',
            'approved_by' => 'nullable|exists:users,id',
            'updated_by' => 'nullable|exists:users,id',
            'created_by' => 'nullable|exists:users,id',
        ];
    }
}
