<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class HseLadderSelfInspectionChecklist extends Model
{
    use HasFactory;
    protected $fillable =[
        'name_of_the_site',
        'date',
        'person_inspected',
        'position',
        'approved_by',
        'updated_by',
        'created_by',
        'approved_date',
        'hse_ladder_des_1',
        'is_hse_ladder_des_1',
        'hse_ladder_des_remarks_1',
        'hse_ladder_des_2',
        'is_hse_ladder_des_2',
        'hse_ladder_des_remarks_2',
        'hse_ladder_des_3',
        'is_hse_ladder_des_3',
        'hse_ladder_des_remarks_3',
        'hse_ladder_des_4',
        'is_hse_ladder_des_4',
        'hse_ladder_des_remarks_4',
        'hse_ladder_des_5',
        'is_hse_ladder_des_5',
        'hse_ladder_des_remarks_5',
        'hse_ladder_des_6',
        'is_hse_ladder_des_6',
        'hse_ladder_des_remarks_6',
        'hse_ladder_des_7',
        'is_hse_ladder_des_7',
        'hse_ladder_des_remarks_7',
        'hse_ladder_des_8',
        'is_hse_ladder_des_8',
        'hse_ladder_des_remarks_8',
        'hse_ladder_des_9',
        'is_hse_ladder_des_9',
        'hse_ladder_des_remarks_9',
        'hse_ladder_des_10',
        'is_hse_ladder_des_10',
        'hse_ladder_des_remarks_10',
        'hse_ladder_des_11',
        'is_hse_ladder_des_11',
        'hse_ladder_des_remarks_11',
        'hse_ladder_des_12',
        'is_hse_ladder_des_12',
        'hse_ladder_des_remarks_12',
        'hse_ladder_des_13',
        'is_hse_ladder_des_13',
        'hse_ladder_des_remarks_13',
        'hse_ladder_des_14',
        'is_hse_ladder_des_14',
        'hse_ladder_des_remarks_14',
        'hse_ladder_des_15',
        'is_hse_ladder_des_15',
        'hse_ladder_des_remarks_15',
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

