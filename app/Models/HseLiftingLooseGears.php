<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class HseLiftingLooseGears extends Model
{
    use HasFactory;
    protected $fillable =[
        'asset_nnumber',
        'loose_gears_name',
        'loose_gears_specification',
        'capacity',
        'tested_on',
        'agency',
        'status',
        'remarks',
        'approved_by',
        'updated_by',
        'created_by',
        'approved_date',
];

public function approvedBy(): BelongsTo
{
    return $this->belongsTo(User::class, 'approved_by');
}

public function createdBy(): BelongsTo
{
    return $this->belongsTo(User::class, 'created_by');
}

public function updatedBy(): BelongsTo
{
    return $this->belongsTo(User::class, 'updated_by');
}
}
