<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseChemicalRegisterRequest extends FormRequest
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
            'material_name' => 'required|string|max:255',
            'appearance' => 'required|string|max:255',
            'uom' => 'required|string|max:255',
            'weight' => 'nullable|string|max:255',
            'user_dept' => 'required|string|max:255',
            'hazard_symbols' => 'sometimes|array',
            'hazard_symbols.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hazard_statement' => 'required|string|max:255',
            'physical_hazards' => 'required|string|max:255',
            'disposal_procedure' => 'required|string|max:255',
            'fire_rating' => 'required|string|max:255',
            'msds_available' => 'required|string|max:255',
        ];
    }
}
