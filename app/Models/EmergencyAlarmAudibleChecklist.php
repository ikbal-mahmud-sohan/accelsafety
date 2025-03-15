<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyAlarmAudibleChecklist extends Model
{

    use HasFactory;
    protected $fillable = [
        'emergency_alarm_audible_id',
        'sound_condition',
        'make_of_position',
        'alarm_sensor',
        'battery_backup_condition',
        'record_of_alarm',
        'name_plate_and_operating_instruction',
        'physical_damage',
        'last_maintenance_date',
        'remarks',
    ];

    public function emergency_alarm_audible()
    {
        return $this->belongsTo(EmergencyAlarmAudible::class, 'emergency_alarm_audible_id');
    }
}
