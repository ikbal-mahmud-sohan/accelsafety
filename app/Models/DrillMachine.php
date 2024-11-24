<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class DrillMachine extends Model
{
    /** @use HasFactory<\Database\Factories\DrillMachineFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'drill_machine_des_1',
        'drill_machine_des_2',
        'drill_machine_des_3',
        'drill_machine_des_4',
        'drill_machine_des_5',
        'drill_machine_des_6',
        'drill_machine_des_7',
        'drill_machine_des_8',
        'drill_machine_des_9',
        'is_drill_machine_1',
        'is_drill_machine_2',
        'is_drill_machine_3',
        'is_drill_machine_4',
        'is_drill_machine_5',
        'is_drill_machine_6',
        'is_drill_machine_7',
        'is_drill_machine_8',
        'is_drill_machine_9',
        'drill_machine_remarks_1',
        'drill_machine_remarks_2',
        'drill_machine_remarks_3',
        'drill_machine_remarks_4',
        'drill_machine_remarks_5',
        'drill_machine_remarks_6',
        'drill_machine_remarks_7',
        'drill_machine_remarks_8',
        'drill_machine_remarks_9',
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
