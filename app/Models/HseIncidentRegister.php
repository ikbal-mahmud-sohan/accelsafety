<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HseIncidentRegister extends Model
{
    use HasFactory;

    protected $fillable =[
        'date',
        'types_of_incident',
        'department',
        'involved_person',
        'description_of_incident',
        'location',
        'property_damaged',
        'operation_stopped',
        'immediate_cause',
        'immediate_action_taken',
        'recommendations_inv_report',
        'action_party_with_position',
        'time_frame',
        'action_status',
        'remarks',
    ];
}


