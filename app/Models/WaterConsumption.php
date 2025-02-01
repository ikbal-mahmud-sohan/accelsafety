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
        'unit_name',
        'month',
        'date',
        'employee_name',
        'designation',
        'ground_water',
        'ground_water_unit',
        'gw_last_flow_meter',
        'gw_current_flow_meter',
        'rain_water',
        'rain_water_unit',
        'rw_last_flow_meter',
        'rw_current_flow_meter',
        'domestic_water',
        'domestic_water_unit',
        'dw_last_flow_meter',
        'dw_current_flow_meter',
        'process_water',
        'process_water_unit',
        'pw_last_flow_meter',
        'pw_current_flow_meter',
        'etp_inlet_water',
        'etp_inlet_water_unit',
        'eiw_last_flow_meter',
        'eiw_current_flow_meter',
        'etp_outlet_water',
        'etp_outlet_water_unit',
        'eow_last_flow_meter',
        'eow_current_flow_meter',
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
        'rain_water' => 'float',
    ];
}
