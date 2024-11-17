<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HseChemicalRegister extends Model
{
    use HasFactory;
    protected $fillable =[
        'material_name',
        'appearance',
        'uom',
        'weight',
        'user_dept',
        'hazard_symbols',
        'hazard_statement',
        'physical_hazards',
        'disposal_procedure',
        'fire_rating',
        'msds_available',
        'remarks'
    ];
    protected $casts = [
        'hazard_symbols' => 'array', 
    ];


}
