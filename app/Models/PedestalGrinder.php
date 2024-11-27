<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class PedestalGrinder extends Model
{
    /** @use HasFactory<\Database\Factories\PedestalGrinderFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'pedestal_grinder_des_1',
        'pedestal_grinder_des_2',
        'pedestal_grinder_des_3',
        'pedestal_grinder_des_4',
        'pedestal_grinder_des_5',
        'pedestal_grinder_des_6',
        'pedestal_grinder_des_7',
        'pedestal_grinder_des_8',
        'pedestal_grinder_des_9',
        'pedestal_grinder_des_10',
        'is_pedestal_grinder_1',
        'is_pedestal_grinder_2',
        'is_pedestal_grinder_3',
        'is_pedestal_grinder_4',
        'is_pedestal_grinder_5',
        'is_pedestal_grinder_6',
        'is_pedestal_grinder_7',
        'is_pedestal_grinder_8',
        'is_pedestal_grinder_9',
        'is_pedestal_grinder_10',
        'pedestal_grinder_remarks_1',
        'pedestal_grinder_remarks_2',
        'pedestal_grinder_remarks_3',
        'pedestal_grinder_remarks_4',
        'pedestal_grinder_remarks_5',
        'pedestal_grinder_remarks_6',
        'pedestal_grinder_remarks_7',
        'pedestal_grinder_remarks_8',
        'pedestal_grinder_remarks_9',
        'pedestal_grinder_remarks_10',
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
