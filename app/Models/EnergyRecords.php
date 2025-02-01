<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnergyRecords extends Model
{
    /** @use HasFactory<\Database\Factories\EnergyRecordsFactory> */
    use HasFactory;
    protected $table = 'energy_records';

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
        'item_name',
        'item_code',
        'type',
        'fuel',
        'energy_used',
        'input_numeric',
        'attachement',
        'all_ghgs',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'input_numeric' => 'decimal:2',
        'attachement' => 'array', 

    ];
}
