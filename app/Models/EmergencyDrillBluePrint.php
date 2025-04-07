<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyDrillBluePrint extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'time',
        'title',
        'emergency_simulation',
        'location',
        'incident_initiator',
        'emergency_communication',
        'observers',
        'location_data',
        'fire_scenario',
        'site_main_controller_responsibility',
        'site_incident_controller_responsibility',
        'emergency_response_team_responsibility',
        'employees_responsibility',
    ];

    protected $casts = [
        'location_data' => 'array',
    ];
}
