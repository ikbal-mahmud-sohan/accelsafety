<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HiraLite extends Model
{
    /** @use HasFactory<\Database\Factories\HiraLiteFactory> */
    use HasFactory;
    protected $fillable = [
        'hira_lites_assessment_id',
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

    public function hiraLiteAssessment(): BelongsTo
    {
        return $this->belongsTo(HiraLitesAssessment::class, 'hira_lites_assessment_id');
    }
}
