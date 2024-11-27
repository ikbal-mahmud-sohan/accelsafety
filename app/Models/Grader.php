<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Grader extends Model
{
    /** @use HasFactory<\Database\Factories\GraderFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'grader_des_1',
        'grader_des_2',
        'grader_des_3',
        'grader_des_4',
        'grader_des_5',
        'grader_des_6',
        'grader_des_7',
        'grader_des_8',
        'grader_des_9',
        'grader_des_10',
        'grader_des_11',
        'grader_des_12',
        'is_grader_1',
        'is_grader_2',
        'is_grader_3',
        'is_grader_4',
        'is_grader_5',
        'is_grader_6',
        'is_grader_7',
        'is_grader_8',
        'is_grader_9',
        'is_grader_10',
        'is_grader_11',
        'is_grader_12',
        'grader_remarks_1',
        'grader_remarks_2',
        'grader_remarks_3',
        'grader_remarks_4',
        'grader_remarks_5',
        'grader_remarks_6',
        'grader_remarks_7',
        'grader_remarks_8',
        'grader_remarks_9',
        'grader_remarks_10',
        'grader_remarks_11',
        'grader_remarks_12',
        'fit',
        'checked_by',
        'reviewed_by',
        'checked_by_date',
        'reviewed_by_date',
        'checked_by_signature',
        'reviewed_by_signature',
        'approved_by',
        'updated_by',
        'created_by',
        'approved_date',
    ];

    protected $casts = [
        'checked_by_signature' => 'array', 
        'reviewed_by_signature' => 'array',
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
