<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Bus extends Model
{
    /** @use HasFactory<\Database\Factories\BusFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'buse_des_1',
        'buse_des_2',
        'buse_des_3',
        'buse_des_4',
        'buse_des_5',
        'buse_des_6',
        'buse_des_7',
        'buse_des_8',
        'buse_des_9',
        'buse_des_10',
        'buse_des_11',
        'buse_des_12',
        'buse_des_13',
        'buse_des_14',
        'buse_des_15',
        'is_buse_1',
        'is_buse_2',
        'is_buse_3',
        'is_buse_4',
        'is_buse_5',
        'is_buse_6',
        'is_buse_7',
        'is_buse_8',
        'is_buse_9',
        'is_buse_10',
        'is_buse_11',
        'is_buse_12',
        'is_buse_13',
        'is_buse_14',
        'is_buse_15',
        'buse_remarks_1',
        'buse_remarks_2',
        'buse_remarks_3',
        'buse_remarks_4',
        'buse_remarks_5',
        'buse_remarks_6',
        'buse_remarks_7',
        'buse_remarks_8',
        'buse_remarks_9',
        'buse_remarks_10',
        'buse_remarks_11',
        'buse_remarks_12',
        'buse_remarks_13',
        'buse_remarks_14',
        'buse_remarks_15',
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
