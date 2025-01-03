<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accident extends Model
{
    const STATUS_CREATED = 'Created';
    const STATUS_OPEN = 'Open';
    const STATUS_CLOSED = 'Closed';

    use HasFactory;
    protected $fillable = [
    'month',
    'date', 
    'type_of_accident',
    'description',
    'zone_location',
    'precise_location',
    'injury_type',
    'affected_body_parts',
    'property_damaged',
    'root_cause',
    'action',
    'days_lost',
    'remarks',
    'type_of_victim_employee',
    'responsible_name',
    'deadline',
    'status',
    'verified_image',
    'site_name',
    'time_date',
    'incident_category',
    'immidiate_cause',
    'incident_location',
    'incident_descriptions',
    'investigation_lead',
    'attachment',
    'is_required'
    ];
    protected $casts = [
        'verified_image' => 'array', 
        'attachment' => 'array',
        'property_damaged' => 'boolean',
        'is_required' => 'boolean', 
    ];
    
    public function investigations()
    {
        return $this->hasMany(AccidentInvestigation::class, 'accident_id');
    }
}
