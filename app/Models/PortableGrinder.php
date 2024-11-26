<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class PortableGrinder extends Model
{
    /** @use HasFactory<\Database\Factories\PortableGrinderFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'portable_grinder_des_1',
        'portable_grinder_des_2',
        'portable_grinder_des_3',
        'portable_grinder_des_4',
        'portable_grinder_des_5',
        'portable_grinder_des_6',
        'portable_grinder_des_7',
        'portable_grinder_des_8',
        'portable_grinder_des_9',
        'portable_grinder_des_10',
        'portable_grinder_des_11',
        'portable_grinder_des_12',
        'is_portable_grinder_1',
        'is_portable_grinder_2',
        'is_portable_grinder_3',
        'is_portable_grinder_4',
        'is_portable_grinder_5',
        'is_portable_grinder_6',
        'is_portable_grinder_7',
        'is_portable_grinder_8',
        'is_portable_grinder_9',
        'is_portable_grinder_10',
        'is_portable_grinder_11',
        'is_portable_grinder_12',
        'portable_grinder_remarks_1',
        'portable_grinder_remarks_2',
        'portable_grinder_remarks_3',
        'portable_grinder_remarks_4',
        'portable_grinder_remarks_5',
        'portable_grinder_remarks_6',
        'portable_grinder_remarks_7',
        'portable_grinder_remarks_8',
        'portable_grinder_remarks_9',
        'portable_grinder_remarks_10',
        'portable_grinder_remarks_11',
        'portable_grinder_remarks_12',
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
