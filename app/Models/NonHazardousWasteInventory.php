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
        'month',
        'cutting_jhute',
        'sewing_jhut',
        'dying_jhut',
        'cut_piece',
        'short_piece',
        'left_over_fabrics',
        'cartoon',
        'cone',
        'ply',
        'plastic',
        'left_over_garments',
        'metalic_scrap',
        'loose_sewing_thread',
        'wood_material',
        'broken_niddle',
        'food_waste',
        'paper',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'cutting_jhute' => 'float',
        'sewing_jhut' => 'float',
        'dying_jhut' => 'float',
        'cut_piece' => 'float',
        'short_piece' => 'float',
        'left_over_fabrics' => 'float',
        'cartoon' => 'float',
        'cone' => 'float',
        'ply' => 'float',
        'plastic' => 'float',
        'left_over_garments' => 'float',
        'metalic_scrap' => 'float',
        'loose_sewing_thread' => 'float',
        'wood_material' => 'float',
        'broken_niddle' => 'float',
        'food_waste' => 'float',
        'paper' => 'float',
    ];

}
