<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hira extends Model
{
    use HasFactory;
    protected $fillable = [
        'process',
        'activity',
        'location',
        'type_of_activity',
        'occupations',
        'event',
        'cause',
        'impact',
        'hazard_type',
        'likelihood',
        'impact_rating_factors_regulatory',
        'impact_rating_factors_safety',
        'impact_score',
        'overall_risk_score',
        'operational_control_elimination',
        'operational_control_substitution',
        'operational_control_engineering',
        'operational_control_administrative',
        'ppe',
        'risk_evaluation_control_type',
        'risk_evaluation_effectiveness',
        'risk_evaluation_likelihood',
        'risk_evaluation_impact_score',
        'risk_evaluation_overall_risk_score',
        'risk_evaluation_level_of_significance',
        'mitigation',
        'type_of_mitigation',
        'status',
        'remarks',
    ];
    protected $casts = [
        'operational_control_elimination' => 'array', 
        'operational_control_substitution' => 'array', 
        'operational_control_engineering' => 'array', 
        'operational_control_administrative' => 'array', 
        'ppe' => 'array',
        'type_of_activity' => 'array',
        'occupations' => 'array',
    ];
}
