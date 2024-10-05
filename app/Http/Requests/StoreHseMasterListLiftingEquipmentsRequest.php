<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseMasterListLiftingEquipmentsRequest extends FormRequest
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
            'location' => 'required|string|max:255',
            'name_of_equipment' => 'required|string|max:255',
            'specification' => 'required|string|max:255',
            'capacity_ton' => 'required|string|max:255',
            'safe_working_load' => 'required|string|max:255',
            'last_inspection_done_on' => 'required|string|max:255',
            'last_load_done_on' => 'required|string|max:255',
            'agency' => 'required|string|max:255',
        ];
    }
}
