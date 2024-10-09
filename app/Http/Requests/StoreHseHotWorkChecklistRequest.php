<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseHotWorkChecklistRequest extends FormRequest
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
            'location_of_work' => 'required|string|max:255',
            'equipment_number' => 'required|string|max:255',
            'purpose_of_work' => 'required|string|max:255',
            'no_person_work' => 'required|string|max:255',
            'name_fire_person' => 'required|string|max:255',
            'supervisor_name' => 'required|string|max:255',
            'supervisor_signature' => 'sometimes|array',
            'supervisor_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hw_fire_extinguishers' => 'nullable|string|max:255',
            'hw_equipment' => 'nullable|string|max:255',
            'hw_liquids_dust' => 'nullable|string|max:255',
            'hw_atmosphere' => 'nullable|string|max:255',
            'hw_surface_area' => 'nullable|string|max:255',
            'hw_floors' => 'nullable|string|max:255',
            'hw_surface_areas' => 'nullable|string|max:255',
            'hw_access' => 'nullable|string|max:255',
            'hw_uv' => 'nullable|string|max:255',
            'hw_enclosed_equipment' => 'nullable|string|max:255',
            'hw_containers' => 'nullable|string|max:255',
            'hw_coffee_lunch' => 'nullable|string|max:255',
            'hw_extinguishing_devices' => 'nullable|string|max:255',
            'hw_raising_alarm' => 'nullable|string|max:255',
            'hw_adjoining_areas' => 'nullable|string|max:255',
            'hw_monitored' => 'nullable|string|max:255',
            'created_by' => 'nullable|string|max:255',
        ];
    }
}
