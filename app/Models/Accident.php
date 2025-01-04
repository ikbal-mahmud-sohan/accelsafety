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
    'date', 
    'type_of_accident',
    'incident_location',
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
    'status',
    'verified_image',
    'site_name',
    'immidiate_cause',
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
