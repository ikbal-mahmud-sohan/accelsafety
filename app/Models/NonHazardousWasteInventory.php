<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonHazardousWasteInventory extends Model
{
    /** @use HasFactory<\Database\Factories\NonHazardousWasteInventoryFactory> */
    use HasFactory;

    protected $table = 'non_hazardous_waste_inventories';

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
        'waste_name',
        'waste_type',
        'item_name',
        'unit',
        'amount_of_waste',
        'attachement',
        'waste',
        'total_biodegradable_waste',
        'total_no_biodegradable_waste',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'amount_of_waste' => 'float',
        'attachement' => 'array', // JSON field casting to array
    ];
}
