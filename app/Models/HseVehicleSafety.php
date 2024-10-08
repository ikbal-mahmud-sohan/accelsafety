<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HseVehicleSafety extends Model
{
    use HasFactory;
    protected $fillable = [
        'inspection_date',
        'mileage',
        'vehicle_id_no',
        'vehicle_type',
        'maker',
        'place_of_inspection',
        'inspector',
        'date_of_last_inspection',
        'tires',
        'tires_satisfactory',
        'tires_unsatisfactory',
        'foot_brake',
        'foot_brake_satisfactory',
        'foot_brake_unsatisfactory',
        'hand_brake',
        'hand_brake_satisfactory',
        'hand_brake_unsatisfactory',
        'lights',
        'lights_satisfactory',
        'lights_unsatisfactory',
        'turn_indicators',
        'turn_indicators_satisfactory',
        'turn_indicators_unsatisfactory',
        'horn',
        'horn_satisfactory',
        'horn_unsatisfactory',
        'window_glasses',
        'window_glasses_satisfactory',
        'window_glasses_unsatisfactory',
        'engine_oil_level',
        'engine_oil_level_satisfactory',
        'engine_oil_level_unsatisfactory',
        'brake_oil_level',
        'brake_oil_level_satisfactory',
        'brake_oil_level_unsatisfactory',
        'hydraulic_oil_level',
        'hydraulic_oil_level_satisfactory',
        'hydraulic_oil_level_unsatisfactory',
        'engine_coolant_level',
        'engine_coolant_level_satisfactory',
        'engine_coolant_level_unsatisfactory',
        'portable_fire_extinguisher',
        'portable_fire_extinguisher_satisfactory',
        'portable_fire_extinguisher_unsatisfactory',
        'breakdown_kit',
        'breakdown_kit_satisfactory',
        'breakdown_kit_unsatisfactory',
        'first_aid_kit',
        'first_aid_kit_satisfactory',
        'first_aid_kit_unsatisfactory',
        'legal_documents',
        'legal_documents_satisfactory',
        'legal_documents_unsatisfactory',
        'fuel',
        'fuel_satisfactory',
        'fuel_unsatisfactory',
        'signature_of_inspector',
        'inspector_name',
        'inspector_designation',
        'signature_of_drivers',
    ];
    protected $casts = [
        'signature_of_inspector' => 'array', 
        'signature_of_drivers' => 'array', 
    ];
}
