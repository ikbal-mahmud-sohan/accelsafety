<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterConsumption extends Model
{
    /** @use HasFactory<\Database\Factories\WaterConsumptionFactory> */
    use HasFactory;

    protected $table = 'water_consumptions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'month',
        'process_water',
        'domestic_water',
        'etp_inlet_water',
        'etp_outlet_water',
        'deviation_of_etp_discharge',
        'dying_re_use_water',
        'rain_water',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'process_water' => 'float',
        'domestic_water' => 'float',
        'etp_inlet_water' => 'float',
        'etp_outlet_water' => 'float',
        'deviation_of_etp_discharge' => 'float',
        'dying_re_use_water' => 'float',
        'rain_water' => 'float',
    ];
}
