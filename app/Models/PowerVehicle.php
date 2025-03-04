<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PowerVehicle extends Model
{
    use HasFactory;

    protected $fillable =[
        'unit_name',
        'vehicle_id',
        'vehicle_owner',
        'manufacturer_company_name',
        'type_of_vehicle',
        'capacity',
        'last_maintenance_date',
    ];
}
