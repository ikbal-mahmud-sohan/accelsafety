<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class LightIntensityMeasurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'area',
        'location',
        'location_id',
        'day_time_reading_lux',
        'night_time_reading_lux',
        'date_of_test',
        'day_time_350_lux',
        'night_time_350_lux',
        'remarks',
        'approved_by',
        'updated_by',
        'created_by',
];

public function approvedBy(): BelongsTo
{
    return $this->belongsTo(User::class, 'approved_by');
}


public function createdBy(): BelongsTo
{
    return $this->belongsTo(User::class, 'created_by');
}

/**
 * Get the user who last updated the document.
 */
public function updatedBy(): BelongsTo
{
    return $this->belongsTo(User::class, 'updated_by');
}
}
