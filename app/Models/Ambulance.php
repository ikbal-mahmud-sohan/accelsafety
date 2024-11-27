<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Ambulance extends Model
{
    /** @use HasFactory<\Database\Factories\AmbulanceFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'ambulance_des_1',
        'ambulance_des_2',
        'ambulance_des_3',
        'ambulance_des_4',
        'ambulance_des_5',
        'ambulance_des_6',
        'ambulance_des_7',
        'ambulance_des_8',
        'ambulance_des_9',
        'ambulance_des_10',
        'ambulance_des_11',
        'ambulance_des_12',
        'ambulance_des_13',
        'is_ambulance_1',
        'is_ambulance_2',
        'is_ambulance_3',
        'is_ambulance_4',
        'is_ambulance_5',
        'is_ambulance_6',
        'is_ambulance_7',
        'is_ambulance_8',
        'is_ambulance_9',
        'is_ambulance_10',
        'is_ambulance_11',
        'is_ambulance_12',
        'is_ambulance_13',
        'ambulance_remarks_1',
        'ambulance_remarks_2',
        'ambulance_remarks_3',
        'ambulance_remarks_4',
        'ambulance_remarks_5',
        'ambulance_remarks_6',
        'ambulance_remarks_7',
        'ambulance_remarks_8',
        'ambulance_remarks_9',
        'ambulance_remarks_10',
        'ambulance_remarks_11',
        'ambulance_remarks_12',
        'ambulance_remarks_13',
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
