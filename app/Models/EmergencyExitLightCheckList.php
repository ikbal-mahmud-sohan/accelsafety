<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyExitLightCheckList extends Model
{
    use HasFactory;
    protected $fillable = [
        'emergency_exit_light_id',
        'power_supply',
        'light_condition',
        'beam_direction_and_coverage',
        'activation_test',
        'battery_backup',
        'name_plate_and_operating_instruction',
        'physical_damage',
        'last_maintenance_date',
        'remarks',
    ];

    public function emergency_exit_light()
    {
        return $this->belongsTo(EmergencyExitLight::class, 'emergency_exit_light_id');
    }
}
