<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseEntryConfinedChecklistRequest extends FormRequest
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
            'onfined_descriptions' => 'required|string|max:255',
            'ptw_no' => 'required|string|max:255',
            'hazards_introduced' => 'required|string|max:255',
            'authorized_name' => 'required|string|max:255',
            'authorized_contact_no' => 'required|string|max:255',
            'safety_attendant_name' => 'required|string|max:255',
            'safety_attendant_contact_no' => 'required|string|max:255',
            'hazards_stf' => 'required|boolean',
            'hazards_fem' => 'required|boolean',
            'hazards_ppvf' => 'required|boolean',
            'hazards_ppuol' => 'required|boolean',
            'hazards_ptg' => 'required|boolean',
            'hazards_ppah' => 'required|boolean',
            'electrical_hazards' => 'required|string|max:255',
            'mechanical_hazards' => 'required|string|max:255',
            'temperature_extremes' => 'required|string|max:255',
            'others_specify' => 'required|string|max:255',
            'energy_isolation_required' => 'required|boolean',
            'energy_isolation_completed' => 'required|boolean',
            'lines_broken_required' => 'required|boolean',
            'lines_broken_completed' => 'required|boolean',
            'purging_flushing_required' => 'required|boolean',
            'purging_flushing_completed' => 'required|boolean',
            'space_ventilation_required' => 'required|boolean',
            'space_ventilation_completed' => 'required|boolean',
            'secure_area_required' => 'required|boolean',
            'secure_area_completed' => 'required|boolean',
            'GFCI_protected_required' => 'required|boolean',
            'GFCI_protected_completed' => 'required|boolean',
            'trailing_ropes_required' => 'required|boolean',
            'trailing_ropes_completed' => 'required|boolean',
            'retrieval_tripod_required' => 'required|boolean',
            'retrieval_tripod_completed' => 'required|boolean',
            'lifelines_secured_required' => 'required|boolean',
            'lifelines_secured_completed' => 'required|boolean',
            'exit_required' => 'required|boolean',
            'exit_completed' => 'required|boolean',
            'fire_extinguisher_required' => 'required|boolean',
            'fire_extinguisher_completed' => 'required|boolean',
            'special_lighting_required' => 'required|boolean',
            'special_lighting_completed' => 'required|boolean',
            'personal_protective_required' => 'required|boolean',
            'personal_protective_completed' => 'required|boolean',
            'means_communication_required' => 'required|boolean',
            'means_communication_completed' => 'required|boolean',
            'other_name' => 'required|string|max:255',
            'other_completed' => 'required|boolean',
            'indicate_isolated' => 'required|string|max:255',
            'PPE_required_above' => 'required|string|max:255',
            'communication_rescue' => 'required|string|max:255',
            'communication_entrant' => 'required|string|max:255',
            'percent_oxygen' => 'required|string|max:255',
            'percent_lel' => 'required|string|max:255',
            'carbon_monoxide' => 'required|string|max:255',
            'hydrogen_sulfide' => 'required|string|max:255',
            'air_monitoring_remarks' => 'string|max:255',
            'gas_equipment_name' => 'required|string|max:255',
            'gas_model' => 'required|string|max:255',
            'gas_id_no' => 'required|string|max:255',
            'gas_date_calibrated' => 'required|string|max:255',
        ];
    }
}
