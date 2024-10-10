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
            'shv_hi_pot_complied' => 'nullable|string|max:255',
            'shv_hi_pot_remarks' => 'nullable|string|max:255',
            'shv_cordoning_complied' => 'nullable|string|max:255',
            'shv_cordoning_remarks' => 'nullable|string|max:255',
            'shv_ir_before_complied' => 'nullable|string|max:255',
            'shv_ir_before_remarks' => 'nullable|string|max:255',
            'shv_identification_complied' => 'nullable|string|max:255',
            'shv_identification_remarks' => 'nullable|string|max:255',
            'shv_flashing_light_complied' => 'nullable|string|max:255',
            'shv_flashing_light_remarks' => 'nullable|string|max:255',
            'shv_testing_engineer_complied' => 'nullable|string|max:255',
            'shv_testing_engineer_remarks' => 'nullable|string|max:255',
            'shv_ensure_firm_complied' => 'nullable|string|max:255',
            'shv_ensure_firm_remarks' => 'nullable|string|max:255',
            'shv_leak_trip_complied' => 'nullable|string|max:255',
            'shv_leak_trip_remarks' => 'nullable|string|max:255',
            'shv_socket_complied' => 'nullable|string|max:255',
            'shv_socket_remarks' => 'nullable|string|max:255',
            'shv_discharged_complied' => 'nullable|string|max:255',
            'shv_discharged_remarks' => 'nullable|string|max:255',
            'shv_dc_hi_pot_complied' => 'nullable|string|max:255',
            'shv_dc_hi_pot_remarks' => 'nullable|string|max:255',
        ];
    }
}
