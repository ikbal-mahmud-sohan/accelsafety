<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class GantryCrane extends Model
{
    /** @use HasFactory<\Database\Factories\GantryCraneFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'gantry_crane_des_1',
        'gantry_crane_des_2',
        'gantry_crane_des_3',
        'gantry_crane_des_4',
        'gantry_crane_des_5',
        'gantry_crane_des_6',
        'gantry_crane_des_7',
        'gantry_crane_des_8',
        'gantry_crane_des_9',
        'gantry_crane_des_10',
        'gantry_crane_des_11',
        'gantry_crane_des_12',
        'gantry_crane_des_13',
        'gantry_crane_des_14',
        'gantry_crane_des_15',
        'is_gantry_crane_1',
        'is_gantry_crane_2',
        'is_gantry_crane_3',
        'is_gantry_crane_4',
        'is_gantry_crane_5',
        'is_gantry_crane_6',
        'is_gantry_crane_7',
        'is_gantry_crane_8',
        'is_gantry_crane_9',
        'is_gantry_crane_10',
        'is_gantry_crane_11',
        'is_gantry_crane_12',
        'is_gantry_crane_13',
        'is_gantry_crane_14',
        'is_gantry_crane_15',
        'gantry_crane_remarks_1',
        'gantry_crane_remarks_2',
        'gantry_crane_remarks_3',
        'gantry_crane_remarks_4',
        'gantry_crane_remarks_5',
        'gantry_crane_remarks_6',
        'gantry_crane_remarks_7',
        'gantry_crane_remarks_8',
        'gantry_crane_remarks_9',
        'gantry_crane_remarks_10',
        'gantry_crane_remarks_11',
        'gantry_crane_remarks_12',
        'gantry_crane_remarks_13',
        'gantry_crane_remarks_14',
        'gantry_crane_remarks_15',
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
