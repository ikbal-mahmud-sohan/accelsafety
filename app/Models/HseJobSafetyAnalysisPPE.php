<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HseJobSafetyAnalysisPPE extends Model
{
    use HasFactory;
    protected $fillable =[
        'issue_date',
        'issue_no',
        'revision_date',
        'revision_no',
        'jsa_id',
        'process',
        'activity',
        'task',
        'hazards',
        'controls',
        'ppe',
        'recommended_trainings'
    ];
}