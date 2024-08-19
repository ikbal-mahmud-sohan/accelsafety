<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingAttendence extends Model
{
    use HasFactory;
    protected $fillable = [
        'serial_number',
        'training_topic',
        'iso_standard',
        'venue',
        'facilitator',
        'training_date',
        'training_duration',
        'name',
        'title',
        'function',
        'business',
        'signature'
    ];
}
