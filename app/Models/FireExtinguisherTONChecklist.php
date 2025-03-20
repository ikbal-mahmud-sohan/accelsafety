<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FireExtinguisherTONChecklist extends Model
{
    use HasFactory;
    protected $fillable = [
        'fire_extinguisher_ton_id',
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

    public function fire_extinguisher_ton()
    {
        return $this->belongsTo(FireExtinguisherTON::class, 'fire_extinguisher_ton_id');
    }
}
