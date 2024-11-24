<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class MobileCrane extends Model
{
    /** @use HasFactory<\Database\Factories\MobileCraneFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'mobile_crane_des_1',
        'mobile_crane_des_2',
        'mobile_crane_des_3',
        'mobile_crane_des_4',
        'mobile_crane_des_5',
        'mobile_crane_des_6',
        'mobile_crane_des_7',
        'mobile_crane_des_8',
        'mobile_crane_des_9',
        'mobile_crane_des_10',
        'mobile_crane_des_11',
        'mobile_crane_des_12',
        'mobile_crane_des_13',
        'mobile_crane_des_14',
        'mobile_crane_des_15',
        'mobile_crane_des_16',
        'mobile_crane_des_17',
        'mobile_crane_des_18',
        'mobile_crane_des_19',
        'is_mobile_crane_1',
        'is_mobile_crane_2',
        'is_mobile_crane_3',
        'is_mobile_crane_4',
        'is_mobile_crane_5',
        'is_mobile_crane_6',
        'is_mobile_crane_7',
        'is_mobile_crane_8',
        'is_mobile_crane_9',
        'is_mobile_crane_10',
        'is_mobile_crane_11',
        'is_mobile_crane_12',
        'is_mobile_crane_13',
        'is_mobile_crane_14',
        'is_mobile_crane_15',
        'is_mobile_crane_16',
        'is_mobile_crane_17',
        'is_mobile_crane_18',
        'is_mobile_crane_19',
        'mobile_crane_remarks_1',
        'mobile_crane_remarks_2',
        'mobile_crane_remarks_3',
        'mobile_crane_remarks_4',
        'mobile_crane_remarks_5',
        'mobile_crane_remarks_6',
        'mobile_crane_remarks_7',
        'mobile_crane_remarks_8',
        'mobile_crane_remarks_9',
        'mobile_crane_remarks_10',
        'mobile_crane_remarks_11',
        'mobile_crane_remarks_12',
        'mobile_crane_remarks_13',
        'mobile_crane_remarks_14',
        'mobile_crane_remarks_15',
        'mobile_crane_remarks_16',
        'mobile_crane_remarks_17',
        'mobile_crane_remarks_18',
        'mobile_crane_remarks_19',
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
