<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class CircularSaw extends Model
{
    /** @use HasFactory<\Database\Factories\CircularSawFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'circular_saw_des_1',
        'circular_saw_des_2',
        'circular_saw_des_3',
        'circular_saw_des_4',
        'circular_saw_des_5',
        'circular_saw_des_6',
        'circular_saw_des_7',
        'circular_saw_des_8',
        'circular_saw_des_9',
        'is_circular_saw_1',
        'is_circular_saw_2',
        'is_circular_saw_3',
        'is_circular_saw_4',
        'is_circular_saw_5',
        'is_circular_saw_6',
        'is_circular_saw_7',
        'is_circular_saw_8',
        'is_circular_saw_9',
        'circular_saw_remarks_1',
        'circular_saw_remarks_2',
        'circular_saw_remarks_3',
        'circular_saw_remarks_4',
        'circular_saw_remarks_5',
        'circular_saw_remarks_6',
        'circular_saw_remarks_7',
        'circular_saw_remarks_8',
        'circular_saw_remarks_9',
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
