<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHseVehicleSafetyRequest extends FormRequest
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
            'inspection_date' => 'required|string|max:255',
            'mileage' => 'required|string|max:255',
            'vehicle_id_no' => 'required|string|max:255',
            'vehicle_type' => 'required|string|max:255',
            'maker' => 'required|string|max:255',
            'place_of_inspection' => 'required|string|max:255',
            'inspector' => 'required|string|max:255',
            'date_of_last_inspection' => 'required|string|max:255',
            'tires' => 'required|string|max:255',
            'tires_satisfactory'  => 'nullable|string',
            'foot_brake'  => 'nullable|string',
            'foot_brake_satisfactory'  => 'nullable|string',
            'hand_brake'  => 'nullable|string',
            'hand_brake_satisfactory'  => 'nullable|string',
            'lights'  => 'nullable|string',
            'lights_satisfactory'  => 'nullable|string',
            'turn_indicators'  => 'nullable|string',
            'turn_indicators_satisfactory'  => 'nullable|string',
            'horn'  => 'nullable|string',
            'horn_satisfactory'  => 'nullable|string',
            'window_glasses'  => 'nullable|string',
            'window_glasses_satisfactory'  => 'nullable|string',
            'window_glasses_unsatisfactory'  => 'nullable|string',
            'engine_oil_level'  => 'nullable|string',
            'engine_oil_level_satisfactory'  => 'nullable|string',
            'engine_oil_level_unsatisfactory'  => 'nullable|string',
            'brake_oil_level'  => 'nullable|string',
            'brake_oil_level_satisfactory'  => 'nullable|string',
            'hydraulic_oil_level'  => 'nullable|string',
            'hydraulic_oil_level_satisfactory'  => 'nullable|string',
            'hydraulic_oil_level_unsatisfactory'  => 'nullable|string',
            'engine_coolant_level'  => 'nullable|string',
            'engine_coolant_level_satisfactory'  => 'nullable|string',
            'engine_coolant_level_unsatisfactory'  => 'nullable|string',
            'portable_fire_extinguisher'  => 'nullable|string',
            'portable_fire_extinguisher_satisfactory'  => 'nullable|string',
            'portable_fire_extinguisher_unsatisfactory'  => 'nullable|string',
            'breakdown_kit'  => 'nullable|string',
            'breakdown_kit_satisfactory'  => 'nullable|string',
            'breakdown_kit_unsatisfactory'  => 'nullable|string',
            'first_aid_kit'  => 'nullable|string',
            'first_aid_kit_satisfactory'  => 'nullable|string',
            'first_aid_kit_unsatisfactory'  => 'nullable|string',
            'legal_documents'  => 'nullable|string',
            'legal_documents_satisfactory'  => 'nullable|string',
            'legal_documents_unsatisfactory'  => 'nullable|string',
            'fuel'  => 'nullable|string',
            'fuel_satisfactory'  => 'nullable|string',
            'fuel_unsatisfactory'  => 'nullable|string',
            'signature_of_inspector'  => 'nullable|string',
            'inspector_name'  => 'nullable|string',
            'inspector_designation'  => 'nullable|string',
            'signature_of_drivers'  => 'nullable|string',
        ];
    }
}
