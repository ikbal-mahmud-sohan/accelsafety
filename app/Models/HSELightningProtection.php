<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HSELightningProtection extends Model
{
    use HasFactory;
    protected $fillable =[
        'equipment_details',
        'lightning_protector',
        'last_measured_date',
        'next_measuring_date',
        'check_points',
        'status'
];
}
