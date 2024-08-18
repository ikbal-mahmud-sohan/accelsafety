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
        'first_training_topic',
        'first_training_date',
        'first_training_status',
        'second_training_topic',
        'second_training_date',
        'second_training_status',
        'third_training_topic',
        'third_training_date',
        'third_training_status',
        'fourth_training_topic',
        'fourth_training_date',
        'fourth_training_status',
        'fifth_training_topic',
        'fifth_training_date',
        'fifth_training_status',
        'additional_resources'
            ];
}
