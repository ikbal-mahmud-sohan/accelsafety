<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafetyObservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'auditor',
        'plant_name',
        'location',
        'audit_date',
        'category',
        'problem_description',
        'problematic_progressive_images', // Array field
        'root_cause',
        'resp_department',
        'owner_department',
        'improvement_actions',
        'due_date',
        'status',
        'priority_type',
        'remarks',
        'corrective_image',
        'importance_level',
        'work_accomplished_by',
    ];

    protected $casts = [
        'problematic_progressive_images' => 'array', // This line ensures the array is cast to JSON
    ];
}
