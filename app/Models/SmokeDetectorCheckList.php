<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmokeDetectorCheckList extends Model
{
    use HasFactory;
    protected $fillable = [
        'smoke_detector_id',
        'placement',
        'power_source',
        'battery_check',
        'test_button',
        'cleanliness',
        'sensitivity',
        'interconnection_with_repeater',
        'last_calibration_date',
        'remarks',
    ];

    public function smoke_detector()
    {
        return $this->belongsTo(SmokeDetector::class, 'smoke_detector_id');
    }


}
