<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class SkidSteerLoader extends Model
{
    /** @use HasFactory<\Database\Factories\SkidSteerLoaderFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'skid_steer_des_1',
        'skid_steer_des_2',
        'skid_steer_des_3',
        'skid_steer_des_4',
        'skid_steer_des_5',
        'skid_steer_des_6',
        'skid_steer_des_7',
        'skid_steer_des_8',
        'skid_steer_des_9',
        'skid_steer_des_10',
        'skid_steer_des_11',
        'skid_steer_des_12',
        'skid_steer_des_13',
        'is_skid_steer_1',
        'is_skid_steer_2',
        'is_skid_steer_3',
        'is_skid_steer_4',
        'is_skid_steer_5',
        'is_skid_steer_6',
        'is_skid_steer_7',
        'is_skid_steer_8',
        'is_skid_steer_9',
        'is_skid_steer_10',
        'is_skid_steer_11',
        'is_skid_steer_12',
        'is_skid_steer_13',
        'skid_steer_remarks_1',
        'skid_steer_remarks_2',
        'skid_steer_remarks_3',
        'skid_steer_remarks_4',
        'skid_steer_remarks_5',
        'skid_steer_remarks_6',
        'skid_steer_remarks_7',
        'skid_steer_remarks_8',
        'skid_steer_remarks_9',
        'skid_steer_remarks_10',
        'skid_steer_remarks_11',
        'skid_steer_remarks_12',
        'skid_steer_remarks_13',
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
