<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class ElectricalVibrator extends Model
{
    /** @use HasFactory<\Database\Factories\ElectricalVibratorFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'electrical_vibrator_des_1',
        'electrical_vibrator_des_2',
        'electrical_vibrator_des_3',
        'electrical_vibrator_des_4',
        'electrical_vibrator_des_5',
        'electrical_vibrator_des_6',
        'electrical_vibrator_des_7',
        'electrical_vibrator_des_8',
        'is_electrical_vibrator_1',
        'is_electrical_vibrator_2',
        'is_electrical_vibrator_3',
        'is_electrical_vibrator_4',
        'is_electrical_vibrator_5',
        'is_electrical_vibrator_6',
        'is_electrical_vibrator_7',
        'is_electrical_vibrator_8',
        'electrical_vibrator_remarks_1',
        'electrical_vibrator_remarks_2',
        'electrical_vibrator_remarks_3',
        'electrical_vibrator_remarks_4',
        'electrical_vibrator_remarks_5',
        'electrical_vibrator_remarks_6',
        'electrical_vibrator_remarks_7',
        'electrical_vibrator_remarks_8',
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
