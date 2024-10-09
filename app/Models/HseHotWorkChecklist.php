<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HseHotWorkChecklist extends Model
{
    use HasFactory;
    protected $fillable =[
        'location_of_work',
        'equipment_number',
        'purpose_of_work',
        'no_person_work',
        'name_fire_person',
        'supervisor_name',
        'supervisor_signature',
        'hw_fire_extinguishers',
        'hw_equipment',
        'hw_liquids_dust',
        'hw_atmosphere',
        'hw_surface_area',
        'hw_floors',
        'hw_surface_areas',
        'hw_access',
        'hw_uv',
        'hw_enclosed_equipment',
        'hw_containers',
        'hw_coffee_lunch',
        'hw_extinguishing_devices',
        'hw_raising_alarm',
        'hw_adjoining_areas',
        'hw_monitored',
        'approved_by',
        'updated_by',
        'created_by',
        'approved_date',
    ];
    protected $casts = [
        'supervisor_signature' => 'array', ];
    
    public function approvedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
