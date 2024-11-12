<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class EarthCompactor extends Model
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
        'compactor_des_1',
        'compactor_des_2',
        'compactor_des_3',
        'compactor_des_4',
        'compactor_des_5',
        'compactor_des_6',
        'compactor_des_7',
        'compactor_des_8',
        'compactor_des_9',
        'compactor_des_10',
        'compactor_des_11',
        'is_compactor_1',
        'is_compactor_2',
        'is_compactor_3',
        'is_compactor_4',
        'is_compactor_5',
        'is_compactor_6',
        'is_compactor_7',
        'is_compactor_8',
        'is_compactor_9',
        'is_compactor_10',
        'is_compactor_11',
        'compactor_remarks_1',
        'compactor_remarks_2',
        'compactor_remarks_3',
        'compactor_remarks_4',
        'compactor_remarks_5',
        'compactor_remarks_6',
        'compactor_remarks_7',
        'compactor_remarks_8',
        'compactor_remarks_9',
        'compactor_remarks_10',
        'compactor_remarks_11',
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
