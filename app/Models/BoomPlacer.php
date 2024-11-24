<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class BoomPlacer extends Model
{
    /** @use HasFactory<\Database\Factories\BoomPlacerFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'boom_placer_des_1',
        'boom_placer_des_2',
        'boom_placer_des_3',
        'boom_placer_des_4',
        'boom_placer_des_5',
        'boom_placer_des_6',
        'boom_placer_des_7',
        'boom_placer_des_8',
        'boom_placer_des_9',
        'boom_placer_des_10',
        'boom_placer_des_11',
        'boom_placer_des_12',
        'boom_placer_des_13',
        'boom_placer_des_14',
        'boom_placer_des_15',
        'boom_placer_des_16',
        'boom_placer_des_17',
        'boom_placer_des_18',
        'is_boom_placer_1',
        'is_boom_placer_2',
        'is_boom_placer_3',
        'is_boom_placer_4',
        'is_boom_placer_5',
        'is_boom_placer_6',
        'is_boom_placer_7',
        'is_boom_placer_8',
        'is_boom_placer_9',
        'is_boom_placer_10',
        'is_boom_placer_11',
        'is_boom_placer_12',
        'is_boom_placer_13',
        'is_boom_placer_14',
        'is_boom_placer_15',
        'is_boom_placer_16',
        'is_boom_placer_17',
        'is_boom_placer_18',
        'boom_placer_remarks_1',
        'boom_placer_remarks_2',
        'boom_placer_remarks_3',
        'boom_placer_remarks_4',
        'boom_placer_remarks_5',
        'boom_placer_remarks_6',
        'boom_placer_remarks_7',
        'boom_placer_remarks_8',
        'boom_placer_remarks_9',
        'boom_placer_remarks_10',
        'boom_placer_remarks_11',
        'boom_placer_remarks_12',
        'boom_placer_remarks_13',
        'boom_placer_remarks_14',
        'boom_placer_remarks_15',
        'boom_placer_remarks_16',
        'boom_placer_remarks_17',
        'boom_placer_remarks_18',
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
