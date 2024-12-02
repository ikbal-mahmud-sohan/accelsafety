<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class EotCrane extends Model
{
    /** @use HasFactory<\Database\Factories\EotCraneFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'eot_des_1',
        'eot_des_2',
        'eot_des_3',
        'eot_des_4',
        'eot_des_5',
        'eot_des_6',
        'eot_des_7',
        'eot_des_8',
        'eot_des_9',
        'eot_des_10',
        'is_eot_1',
        'is_eot_2',
        'is_eot_3',
        'is_eot_4',
        'is_eot_5',
        'is_eot_6',
        'is_eot_7',
        'is_eot_8',
        'is_eot_9',
        'is_eot_10',
        'eot_remarks_1',
        'eot_remarks_2',
        'eot_remarks_3',
        'eot_remarks_4',
        'eot_remarks_5',
        'eot_remarks_6',
        'eot_remarks_7',
        'eot_remarks_8',
        'eot_remarks_9',
        'eot_remarks_10',
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
