<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseLadderSelfInspectionChecklistRequest extends FormRequest
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
            'name_of_the_site' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'person_inspected' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'created_by' => 'nullable|integer|exists:users,id',
            'hse_ladder_des_1' => 'nullable|string|max:255',
            'is_hse_ladder_des_1' => 'nullable|string|max:255',
            'hse_ladder_des_remarks_1' => 'nullable|string|max:255',
            'hse_ladder_des_2' => 'nullable|string|max:255',
            'is_hse_ladder_des_2' => 'nullable|string|max:255',
            'hse_ladder_des_remarks_2' => 'nullable|string|max:255',
            'hse_ladder_des_3' => 'nullable|string|max:255',
            'is_hse_ladder_des_3' => 'nullable|string|max:255',
            'hse_ladder_des_remarks_3' => 'nullable|string|max:255',
            'hse_ladder_des_4' => 'nullable|string|max:255',
            'is_hse_ladder_des_4' => 'nullable|string|max:255',
            'hse_ladder_des_remarks_4' => 'nullable|string|max:255',
            'hse_ladder_des_5' => 'nullable|string|max:255',
            'is_hse_ladder_des_5' => 'nullable|string|max:255',
            'hse_ladder_des_remarks_5' => 'nullable|string|max:255',
            'hse_ladder_des_6' => 'nullable|string|max:255',
            'is_hse_ladder_des_6' => 'nullable|string|max:255',
            'hse_ladder_des_remarks_6' => 'nullable|string|max:255',
            'hse_ladder_des_7' => 'nullable|string|max:255',
            'is_hse_ladder_des_7' => 'nullable|string|max:255',
            'hse_ladder_des_remarks_7' => 'nullable|string|max:255',
            'hse_ladder_des_8' => 'nullable|string|max:255',
            'is_hse_ladder_des_8' => 'nullable|string|max:255',
            'hse_ladder_des_remarks_8' => 'nullable|string|max:255',
            'hse_ladder_des_9' => 'nullable|string|max:255',
            'is_hse_ladder_des_9' => 'nullable|string|max:255',
            'hse_ladder_des_remarks_9' => 'nullable|string|max:255',
            'hse_ladder_des_10' => 'nullable|string|max:255',
            'is_hse_ladder_des_10' => 'nullable|string|max:255',
            'hse_ladder_des_remarks_10' => 'nullable|string|max:255',
            'hse_ladder_des_11' => 'nullable|string|max:255',
            'is_hse_ladder_des_11' => 'nullable|string|max:255',
            'hse_ladder_des_remarks_11' => 'nullable|string|max:255',
            'hse_ladder_des_12' => 'nullable|string|max:255',
            'is_hse_ladder_des_12' => 'nullable|string|max:255',
            'hse_ladder_des_remarks_12' => 'nullable|string|max:255',
            'hse_ladder_des_13' => 'nullable|string|max:255',
            'is_hse_ladder_des_13' => 'nullable|string|max:255',
            'hse_ladder_des_remarks_13' => 'nullable|string|max:255',
            'hse_ladder_des_14' => 'nullable|string|max:255',
            'is_hse_ladder_des_14' => 'nullable|string|max:255',
            'hse_ladder_des_remarks_14' => 'nullable|string|max:255',
            'hse_ladder_des_15' => 'nullable|string|max:255',
            'is_hse_ladder_des_15' => 'nullable|string|max:255',
            'hse_ladder_des_remarks_15' => 'nullable|string|max:255',
        ];
    }
}
