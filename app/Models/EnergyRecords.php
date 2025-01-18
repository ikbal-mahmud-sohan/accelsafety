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
        'month',
        'company_name',
        'unit',
        'type',
        'energy_used',
        'input_numeric',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'input_numeric' => 'decimal:2',
    ];
}
