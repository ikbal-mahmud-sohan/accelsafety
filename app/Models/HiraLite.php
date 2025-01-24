<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HiraLite extends Model
{
    /** @use HasFactory<\Database\Factories\HiraLiteFactory> */
    use HasFactory;
    protected $fillable = [
        'site_location',
        'activity_or_task',
        'risk_assessment_conducted_by',
        'date_conducted',
        'process_owner_or_department',
        'next_review_date',
        'activity',
        'hazard',
        'existing_control_measures',
        'risk_rating_likelihood',
        'risk_rating_severity',
        'risk_rating_overall',
        'additional_control_measures',
        'revised_risk_rating_likelihood',
        'revised_risk_rating_severity',
        'revised_risk_rating_overall',
        'person_responsible',
        'completion_date',
    ];
   
}
