<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HazardousWasteInventories extends Model
{
    /** @use HasFactory<\Database\Factories\HazardousWasteInventoriesFactory> */
    use HasFactory;
    protected $table = 'hazardous_waste_inventories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'month',
        'dust',
        'chemical_contaminated',
        'chemical_drum',
        'burn_oil',
        'dyeing_waste',
        'electrical_waste',
        'tube_light',
        'toner',
        'battery',
        'medical_waste',
        'sludge',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'dust' => 'float',
        'chemical_contaminated' => 'float',
        'chemical_drum' => 'float',
        'burn_oil' => 'float',
        'dyeing_waste' => 'float',
        'electrical_waste' => 'float',
        'tube_light' => 'float',
        'toner' => 'float',
        'battery' => 'float',
        'medical_waste' => 'float',
        'sludge' => 'float',
    ];
}
