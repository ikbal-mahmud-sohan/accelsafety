<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseSafetyBTRequest extends FormRequest
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
            'stt_1_complied' => 'nullable|string|max:255',
            'stt_1_remarks' => 'nullable|string|max:255',
            'stt_2_complied' => 'nullable|string|max:255',
            'stt_2_remarks' => 'nullable|string|max:255',
            'stt_3_complied' => 'nullable|string|max:255',
            'stt_3_remarks' => 'nullable|string|max:255',
        ];
    }
}