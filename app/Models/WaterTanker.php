<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class WaterTanker extends Model
{
    /** @use HasFactory<\Database\Factories\WaterTankerFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'water_tanker_des_1',
        'water_tanker_des_2',
        'water_tanker_des_3',
        'water_tanker_des_4',
        'water_tanker_des_5',
        'water_tanker_des_6',
        'water_tanker_des_7',
        'water_tanker_des_8',
        'water_tanker_des_9',
        'water_tanker_des_10',
        'water_tanker_des_11',
        'water_tanker_des_12',
        'water_tanker_des_13',
        'water_tanker_des_14',
        'is_water_tanker_1',
        'is_water_tanker_2',
        'is_water_tanker_3',
        'is_water_tanker_4',
        'is_water_tanker_5',
        'is_water_tanker_6',
        'is_water_tanker_7',
        'is_water_tanker_8',
        'is_water_tanker_9',
        'is_water_tanker_10',
        'is_water_tanker_11',
        'is_water_tanker_12',
        'is_water_tanker_13',
        'is_water_tanker_14',
        'water_tanker_remarks_1',
        'water_tanker_remarks_2',
        'water_tanker_remarks_3',
        'water_tanker_remarks_4',
        'water_tanker_remarks_5',
        'water_tanker_remarks_6',
        'water_tanker_remarks_7',
        'water_tanker_remarks_8',
        'water_tanker_remarks_9',
        'water_tanker_remarks_10',
        'water_tanker_remarks_11',
        'water_tanker_remarks_12',
        'water_tanker_remarks_13',
        'water_tanker_remarks_14',
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
