<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Breaker extends Model
{
    /** @use HasFactory<\Database\Factories\BreakerFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'breaker_des_1',
        'breaker_des_2',
        'breaker_des_3',
        'breaker_des_4',
        'breaker_des_5',
        'breaker_des_6',
        'breaker_des_7',
        'is_breaker_1',
        'is_breaker_2',
        'is_breaker_3',
        'is_breaker_4',
        'is_breaker_5',
        'is_breaker_6',
        'is_breaker_7',
        'breaker_remarks_1',
        'breaker_remarks_2',
        'breaker_remarks_3',
        'breaker_remarks_4',
        'breaker_remarks_5',
        'breaker_remarks_6',
        'breaker_remarks_7',
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
