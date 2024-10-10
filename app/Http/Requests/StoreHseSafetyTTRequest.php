<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseSafetyTTRequest extends FormRequest
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
            'stt_4_complied' => 'nullable|string|max:255',
            'stt_4_remarks' => 'nullable|string|max:255',
            'stt_5_complied' => 'nullable|string|max:255',
            'stt_5_remarks' => 'nullable|string|max:255',
            'stt_6_complied' => 'nullable|string|max:255',
            'stt_6_remarks' => 'nullable|string|max:255',
            'stt_7_complied' => 'nullable|string|max:255',
            'stt_7_remarks' => 'nullable|string|max:255',
            'stt_8_complied' => 'nullable|string|max:255',
            'stt_8_remarks' => 'nullable|string|max:255',
            'stt_9_complied' => 'nullable|string|max:255',
            'stt_9_remarks' => 'nullable|string|max:255',
            'stt_10_complied' => 'nullable|string|max:255',
            'stt_10_remarks' => 'nullable|string|max:255',
            'stt_11_complied' => 'nullable|string|max:255',
            'stt_11_remarks' => 'nullable|string|max:255',
            'stt_12_complied' => 'nullable|string|max:255',
            'stt_12_remarks' => 'nullable|string|max:255',
            'stt_13_complied' => 'nullable|string|max:255',
            'stt_13_remarks' => 'nullable|string|max:255',
            'stt_14_complied' => 'nullable|string|max:255',
            'stt_14_remarks' => 'nullable|string|max:255',
            'stt_15_complied' => 'nullable|string|max:255',
            'stt_15_remarks' => 'nullable|string|max:255',
            'stt_16_complied' => 'nullable|string|max:255',
            'stt_16_remarks' => 'nullable|string|max:255',
        ];
    }
}

