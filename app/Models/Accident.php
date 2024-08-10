<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accident extends Model
{
    use HasFactory;
    protected $fillable = [
    'month',
    'date',
    'name',
    'designation',
    'supervisor',
    'department',   
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
    'status'
    ];
}
