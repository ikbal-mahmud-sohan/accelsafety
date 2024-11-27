<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class BatchingPlant extends Model
{
    /** @use HasFactory<\Database\Factories\BatchingPlantFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'batching_plant_des_1',
        'batching_plant_des_2',
        'batching_plant_des_3',
        'batching_plant_des_4',
        'batching_plant_des_5',
        'batching_plant_des_6',
        'batching_plant_des_7',
        'batching_plant_des_8',
        'batching_plant_des_9',
        'batching_plant_des_10',
        'batching_plant_des_11',
        'batching_plant_des_12',
        'batching_plant_des_13',
        'batching_plant_des_14',
        'batching_plant_des_15',
        'batching_plant_des_16',
        'is_batching_plant_1',
        'is_batching_plant_2',
        'is_batching_plant_3',
        'is_batching_plant_4',
        'is_batching_plant_5',
        'is_batching_plant_6',
        'is_batching_plant_7',
        'is_batching_plant_8',
        'is_batching_plant_9',
        'is_batching_plant_10',
        'is_batching_plant_11',
        'is_batching_plant_12',
        'is_batching_plant_13',
        'is_batching_plant_14',
        'is_batching_plant_15',
        'is_batching_plant_16',
        'batching_plant_remarks_1',
        'batching_plant_remarks_2',
        'batching_plant_remarks_3',
        'batching_plant_remarks_4',
        'batching_plant_remarks_5',
        'batching_plant_remarks_6',
        'batching_plant_remarks_7',
        'batching_plant_remarks_8',
        'batching_plant_remarks_9',
        'batching_plant_remarks_10',
        'batching_plant_remarks_11',
        'batching_plant_remarks_12',
        'batching_plant_remarks_13',
        'batching_plant_remarks_14',
        'batching_plant_remarks_15',
        'batching_plant_remarks_16',
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
