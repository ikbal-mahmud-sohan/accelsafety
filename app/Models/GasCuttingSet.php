<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class GasCuttingSet extends Model
{
    /** @use HasFactory<\Database\Factories\GasCuttingSetFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'gas_cutting_des_1',
        'gas_cutting_des_2',
        'gas_cutting_des_3',
        'gas_cutting_des_4',
        'gas_cutting_des_5',
        'gas_cutting_des_6',
        'gas_cutting_des_7',
        'gas_cutting_des_8',
        'gas_cutting_des_9',
        'gas_cutting_des_10',
        'gas_cutting_des_11',
        'gas_cutting_des_12',
        'gas_cutting_des_13',
        'gas_cutting_des_14',
        'gas_cutting_des_15',
        'is_gas_cutting_1',
        'is_gas_cutting_2',
        'is_gas_cutting_3',
        'is_gas_cutting_4',
        'is_gas_cutting_5',
        'is_gas_cutting_6',
        'is_gas_cutting_7',
        'is_gas_cutting_8',
        'is_gas_cutting_9',
        'is_gas_cutting_10',
        'is_gas_cutting_11',
        'is_gas_cutting_12',
        'is_gas_cutting_13',
        'is_gas_cutting_14',
        'is_gas_cutting_15',
        'gas_cutting_remarks_1',
        'gas_cutting_remarks_2',
        'gas_cutting_remarks_3',
        'gas_cutting_remarks_4',
        'gas_cutting_remarks_5',
        'gas_cutting_remarks_6',
        'gas_cutting_remarks_7',
        'gas_cutting_remarks_8',
        'gas_cutting_remarks_9',
        'gas_cutting_remarks_10',
        'gas_cutting_remarks_11',
        'gas_cutting_remarks_12',
        'gas_cutting_remarks_13',
        'gas_cutting_remarks_14',
        'gas_cutting_remarks_15',
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
