<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseEntryConfinedChecklistResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'confined_descriptions' => $this->confined_descriptions,
            'ptw_no' => $this->ptw_no,
            'hazards_introduced' => $this->hazards_introduced,
            'authorized_name' => $this->authorized_name,
            'authorized_contact_no' => $this->authorized_contact_no,
            'safety_attendant_name' => $this->safety_attendant_name,
            'safety_attendant_contact_no' => $this->safety_attendant_contact_no,
            'hazards_stf' => $this->hazards_stf,
            'hazards_fem' => $this->hazards_fem,
            'hazards_ppvf' => $this->hazards_ppvf,
            'hazards_ppuol' => $this->hazards_ppuol,
            'hazards_ptg' => $this->hazards_ptg,
            'hazards_ppah' => $this->hazards_ppah,
            'electrical_hazards' => $this->electrical_hazards,
            'mechanical_hazards' => $this->mechanical_hazards,
            'temperature_extremes' => $this->temperature_extremes,
            'others_specify' => $this->others_specify,
            'energy_isolation_required' => $this->energy_isolation_required,
            'energy_isolation_completed' => $this->energy_isolation_completed,
            'lines_broken_required' => $this->lines_broken_required,
            'lines_broken_completed' => $this->lines_broken_completed,
            'purging_flushing_required' => $this->purging_flushing_required,
            'purging_flushing_completed' => $this->purging_flushing_completed,
            'space_ventilation_required' => $this->space_ventilation_required,
            'space_ventilation_completed' => $this->space_ventilation_completed,
            'secure_area_required' => $this->secure_area_required,
            'secure_area_completed' => $this->secure_area_completed,
            'GFCI_protected_required' => $this->GFCI_protected_required,
            'GFCI_protected_completed' => $this->GFCI_protected_completed,
            'trailing_ropes_required' => $this->trailing_ropes_required,
            'trailing_ropes_completed' => $this->trailing_ropes_completed,
            'retrieval_tripod_required' => $this->retrieval_tripod_required,
            'retrieval_tripod_completed' => $this->retrieval_tripod_completed,
            'lifelines_secured_required' => $this->lifelines_secured_required,
            'lifelines_secured_completed' => $this->lifelines_secured_completed,
            'exit_required' => $this->exit_required,
            'exit_completed' => $this->exit_completed,
            'fire_extinguisher_required' => $this->fire_extinguisher_required,
            'fire_extinguisher_completed' => $this->fire_extinguisher_completed,
            'special_lighting_required' => $this->special_lighting_required,
            'special_lighting_completed' => $this->special_lighting_completed,
            'personal_protective_required' => $this->personal_protective_required,
            'personal_protective_completed' => $this->personal_protective_completed,
            'means_communication_required' => $this->means_communication_required,
            'means_communication_completed' => $this->means_communication_completed,
            'other_name' => $this->other_name,
            'other_completed' => $this->other_completed,
            'indicate_isolated' => $this->indicate_isolated,
            'PPE_required_above' => $this->PPE_required_above,
            'communication_rescue' => $this->communication_rescue,
            'communication_entrant' => $this->communication_entrant,
            'percent_oxygen' => $this->percent_oxygen,
            'percent_lel' => $this->percent_lel,
            'carbon_monoxide' => $this->carbon_monoxide,
            'hydrogen_sulfide' => $this->hydrogen_sulfide,
            'air_monitoring_remarks' => $this->air_monitoring_remarks,
            'gas_equipment_name' => $this->gas_equipment_name,
            'gas_model' => $this->gas_model,
            'gas_id_no' => $this->gas_id_no,
            'gas_date_calibrated' => $this->gas_date_calibrated,
            'approved_by' => $this->approved_by,
            'updated_by' => $this->updated_by,
            'created_by' => $this->created_by,
            'approved_date' => $this->approved_date,
        ];
    }
}
