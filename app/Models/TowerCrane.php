<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class TowerCrane extends Model
{
    /** @use HasFactory<\Database\Factories\TowerCraneFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'tower_crane_des_1',
        'tower_crane_des_2',
        'tower_crane_des_3',
        'tower_crane_des_4',
        'tower_crane_des_5',
        'tower_crane_des_6',
        'tower_crane_des_7',
        'tower_crane_des_8',
        'tower_crane_des_9',
        'tower_crane_des_10',
        'tower_crane_des_11',
        'tower_crane_des_12',
        'tower_crane_des_13',
        'tower_crane_des_14',
        'tower_crane_des_15',
        'tower_crane_des_16',
        'tower_crane_des_17',
        'tower_crane_des_18',
        'tower_crane_des_19',
        'is_tower_crane_1',
        'is_tower_crane_2',
        'is_tower_crane_3',
        'is_tower_crane_4',
        'is_tower_crane_5',
        'is_tower_crane_6',
        'is_tower_crane_7',
        'is_tower_crane_8',
        'is_tower_crane_9',
        'is_tower_crane_10',
        'is_tower_crane_11',
        'is_tower_crane_12',
        'is_tower_crane_13',
        'is_tower_crane_14',
        'is_tower_crane_15',
        'is_tower_crane_16',
        'is_tower_crane_17',
        'is_tower_crane_18',
        'is_tower_crane_19',
        'tower_crane_remarks_1',
        'tower_crane_remarks_2',
        'tower_crane_remarks_3',
        'tower_crane_remarks_4',
        'tower_crane_remarks_5',
        'tower_crane_remarks_6',
        'tower_crane_remarks_7',
        'tower_crane_remarks_8',
        'tower_crane_remarks_9',
        'tower_crane_remarks_10',
        'tower_crane_remarks_11',
        'tower_crane_remarks_12',
        'tower_crane_remarks_13',
        'tower_crane_remarks_14',
        'tower_crane_remarks_15',
        'tower_crane_remarks_16',
        'tower_crane_remarks_17',
        'tower_crane_remarks_18',
        'tower_crane_remarks_19',
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
