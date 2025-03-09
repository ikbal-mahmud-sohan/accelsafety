<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PowerTools extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_name',
        'tool_id_number',
        'tool_name',
        'tool_type',
        'tool_manufacturer',
        'tool_last_calibration_date',
        'tool_last_maintenance_date',
        'tool_enlistment_date',
        'tool_user',
    ];
}
