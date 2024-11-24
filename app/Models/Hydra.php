<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Hydra extends Model
{
    /** @use HasFactory<\Database\Factories\HydraFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'hydra_des_1',
        'hydra_des_2',
        'hydra_des_3',
        'hydra_des_4',
        'hydra_des_5',
        'hydra_des_6',
        'hydra_des_7',
        'hydra_des_8',
        'hydra_des_9',
        'hydra_des_10',
        'hydra_des_11',
        'hydra_des_12',
        'hydra_des_13',
        'hydra_des_14',
        'hydra_des_15',
        'hydra_des_16',
        'is_hydra_1',
        'is_hydra_2',
        'is_hydra_3',
        'is_hydra_4',
        'is_hydra_5',
        'is_hydra_6',
        'is_hydra_7',
        'is_hydra_8',
        'is_hydra_9',
        'is_hydra_10',
        'is_hydra_11',
        'is_hydra_12',
        'is_hydra_13',
        'is_hydra_14',
        'is_hydra_15',
        'is_hydra_16',
        'hydra_remarks_1',
        'hydra_remarks_2',
        'hydra_remarks_3',
        'hydra_remarks_4',
        'hydra_remarks_5',
        'hydra_remarks_6',
        'hydra_remarks_7',
        'hydra_remarks_8',
        'hydra_remarks_9',
        'hydra_remarks_10',
        'hydra_remarks_11',
        'hydra_remarks_12',
        'hydra_remarks_13',
        'hydra_remarks_14',
        'hydra_remarks_15',
        'hydra_remarks_16',
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
