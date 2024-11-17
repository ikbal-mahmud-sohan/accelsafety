<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HseAccidentRegister extends Model
{
    use HasFactory;
    protected $fillable =[
        'date',
        'types_of_accident',
        'department',
        'victims_name_with_position',
        'type_of_employee',
        'description_of_accident',
        'location',
        'effected_body_part',
        'type_of_injury',
        'immediate_cause',
        'immediate_action_taken',
        'investigation_report',
        'action_party_with_position',
        'time_frame',
        'action_status',
        'remarks'
    ];
}
