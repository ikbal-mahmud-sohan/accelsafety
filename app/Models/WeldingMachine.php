<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class WeldingMachine extends Model
{
    /** @use HasFactory<\Database\Factories\WeldingMachineFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'welding_machine_des_1',
        'welding_machine_des_2',
        'welding_machine_des_3',
        'welding_machine_des_4',
        'welding_machine_des_5',
        'welding_machine_des_6',
        'welding_machine_des_7',
        'welding_machine_des_8',
        'welding_machine_des_9',
        'welding_machine_des_10',
        'welding_machine_des_11',
        'is_welding_machine_1',
        'is_welding_machine_2',
        'is_welding_machine_3',
        'is_welding_machine_4',
        'is_welding_machine_5',
        'is_welding_machine_6',
        'is_welding_machine_7',
        'is_welding_machine_8',
        'is_welding_machine_9',
        'is_welding_machine_10',
        'is_welding_machine_11',
        'welding_machine_remarks_1',
        'welding_machine_remarks_2',
        'welding_machine_remarks_3',
        'welding_machine_remarks_4',
        'welding_machine_remarks_5',
        'welding_machine_remarks_6',
        'welding_machine_remarks_7',
        'welding_machine_remarks_8',
        'welding_machine_remarks_9',
        'welding_machine_remarks_10',
        'welding_machine_remarks_11',
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
