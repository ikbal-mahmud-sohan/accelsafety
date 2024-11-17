<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    protected $fillable = [
        'serial_number',
        'employee_name',
        'designation',
        'department',
        'special_training_need',
        'employee_type',
        'status',
        'training_info',
        'additional_resources'
            ];
}
