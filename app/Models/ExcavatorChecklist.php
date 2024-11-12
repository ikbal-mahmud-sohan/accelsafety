<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExcavatorChecklist extends Model
{
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'excavator_des_1',
        'excavator_des_2',
        'excavator_des_3',
        'excavator_des_4',
        'excavator_des_5',
        'excavator_des_6',
        'excavator_des_7',
        'excavator_des_8',
        'excavator_des_9',
        'excavator_des_10',
        'excavator_des_11',
        'excavator_des_12',
        'excavator_des_13',
        'excavator_des_14',
        'is_excavator_1',
        'is_excavator_2',
        'is_excavator_3',
        'is_excavator_4',
        'is_excavator_5',
        'is_excavator_6',
        'is_excavator_7',
        'is_excavator_8',
        'is_excavator_9',
        'is_excavator_10',
        'is_excavator_11',
        'is_excavator_12',
        'is_excavator_13',
        'is_excavator_14',
        'excavator_remarks_1',
        'excavator_remarks_2',
        'excavator_remarks_3',
        'excavator_remarks_4',
        'excavator_remarks_5',
        'excavator_remarks_6',
        'excavator_remarks_7',
        'excavator_remarks_8',
        'excavator_remarks_9',
        'excavator_remarks_10',
        'excavator_remarks_11',
        'excavator_remarks_12',
        'excavator_remarks_13',
        'excavator_remarks_14',
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
