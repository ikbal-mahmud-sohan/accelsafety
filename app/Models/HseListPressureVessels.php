<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HseListPressureVessels extends Model
{
    use HasFactory;
    protected $fillable =[
        'vessel_type',
        'purpose',
        'medium',
        'location',
        'capacity_m3',
        'quantity_nos',
        'working_pressure_bar',
        'relief_valve',
        'prv_set_point_bar',
        'last_hydro',
        'remarks',
];
}
