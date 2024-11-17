<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHsePPEInspectionReportRequest extends FormRequest
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
            'date' =>'required|string|max:255',
            'time' =>'required|string|max:255',
            'area' =>'required|string|max:255',
            'locations' =>'required|string|max:255',
            'mandetory_ppe' =>'required|string|max:255',
            'employee_type' =>'required|string|max:255',
            'total_employee' =>'required|string|max:255',
            'helmet_issued' =>'nullable|string',
            'helmet_in_place' =>'nullable|string',
            'helmet_damaged' =>'nullable|string',
            'shoe_issued' =>'nullable|string',
            'shoe_in_place' =>'nullable|string',
            'shoe_damaged' =>'nullable|string',
            'gloves_issued' =>'nullable|string',
            'gloves_in_place' =>'nullable|string',
            'gloves_damaged' =>'nullable|string',
            'mask_issued' =>'nullable|string',
            'mask_in_place' =>'nullable|string',
            'mask_damaged' =>'nullable|string',
            'googles_issued' =>'nullable|string',
            'googles_in_place' =>'nullable|string',
            'googles_damaged' =>'nullable|string',
            'face_shield_issued' =>'nullable|string',
            'face_shield_in_place' =>'nullable|string',
            'face_shield_damaged' =>'nullable|string',
            'ear_plug_issued' =>'nullable|string',
            'ear_plug_in_place' =>'nullable|string',
            'ear_plug_damaged' =>'nullable|string',
            'full_body_issued' =>'nullable|string',
            'full_body_in_place' =>'nullable|string',
            'full_body_damaged' =>'nullable|string',
            'action_taken_damaged_ppe' =>'nullable|string',
        ];
    }
}
