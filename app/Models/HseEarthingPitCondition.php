<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HseEarthingPitCondition extends Model
{
    use HasFactory;
    protected $fillable =[
        'doc_no',
        'issue_no',
        'issue_date',
        'revision_no',
        'revision_date',
        'equipment_details',
        'specification',
        'last_measured_date',
        'next_measuring_date',
        'check_points',
        'status',
    ];
}
