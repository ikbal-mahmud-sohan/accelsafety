<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HseEntryConfinedChecklist extends Model
{
    use HasFactory;
    protected $fillable = [
        'confined_descriptions',
        'ptw_no',
        'hazards_introduced',
        'authorized_name',
        'authorized_contact_no',
        'safety_attendant_name',
        'safety_attendant_contact_no',
        'hazards_stf',
        'hazards_fem',
        'hazards_ppvf',
        'hazards_ppuol',
        'hazards_ptg',
        'hazards_ppah',
        'electrical_hazards',
        'mechanical_hazards',
        'temperature_extremes',
        'others_specify',
        'energy_isolation_required',
        'energy_isolation_completed',
        'lines_broken_required',
        'lines_broken_completed',
        'purging_flushing_required',
        'purging_flushing_completed',
        'space_ventilation_required',
        'space_ventilation_completed',
        'secure_area_required',
        'secure_area_completed',
        'GFCI_protected_required',
        'GFCI_protected_completed',
        'trailing_ropes_required',
        'trailing_ropes_completed',
        'retrieval_tripod_required',
        'retrieval_tripod_completed',
        'lifelines_secured_required',
        'lifelines_secured_completed',
        'exit_required',
        'exit_completed',
        'fire_extinguisher_required',
        'fire_extinguisher_completed',
        'special_lighting_required',
        'special_lighting_completed',
        'personal_protective_required',
        'personal_protective_completed',
        'means_communication_required',
        'means_communication_completed',
        'other_name',
        'other_completed',
        'indicate_isolated',
        'PPE_required_above',
        'communication_rescue',
        'communication_entrant',
        'percent_oxygen',
        'percent_lel',
        'carbon_monoxide',
        'hydrogen_sulfide',
        'air_monitoring_remarks',
        'gas_equipment_name',
        'gas_model',
        'gas_id_no',
        'gas_date_calibrated',

    ];
}
