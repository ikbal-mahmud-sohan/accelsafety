<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseListPressureVesselsRequest extends FormRequest
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
                'vessel_type' => 'required|string|max:255',
                'purpose' => 'required|string|max:255',
                'medium' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'capacity_m3' => 'required|string|max:255',
                'quantity_nos' => 'required|string|max:255',
                'working_pressure_bar' => 'required|string|max:255',
                'relief_valve' => 'required|boolean',
                'prv_set_point_bar' => 'required|string|max:255',
                'last_hydro' => 'required|string|max:255',
        ];
    }
}
