<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FireExtinguisherTEJChecklist extends Model
{
    use HasFactory;
    protected $fillable = [
        'fire_extinguisher_tej_id',
        'fe_pressure_gauge_condition',
        'placed_in_position',
        'safety_seal_or_pin',
        'handle_trigger_condition',
        'hose_connection_secured_belt',
        'name_plate_and_operating_instruction',
        'physical_damage',
        'corrosion',
        'leakage',
        'refilling_date',
        'remarks',
    ];

    public function emergency_extinguisher_tej()
    {
        return $this->belongsTo(FireExtiguisherTEJ::class, 'fire_extinguisher_tej_id');
    }
}
