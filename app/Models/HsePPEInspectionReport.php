<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class HsePPEInspectionReport extends Model
{
    use HasFactory;
    protected $fillable =[
        'date',
        'time',
        'area',
        'locations',
        'mandetory_ppe',
        'employee_type',
        'total_employee',
        'helmet_issued',
        'helmet_in_place',
        'helmet_damaged',
        'shoe_issued',
        'shoe_in_place',
        'shoe_damaged',
        'gloves_issued',
        'gloves_in_place',
        'gloves_damaged',
        'mask_issued',
        'mask_in_place',
        'mask_damaged',
        'googles_issued',
        'googles_in_place',
        'googles_damaged',
        'face_shield_issued',
        'face_shield_in_place',
        'face_shield_damaged',
        'ear_plug_issued',
        'ear_plug_in_place',
        'ear_plug_damaged',
        'full_body_issued',
        'full_body_in_place',
        'full_body_damaged',
        'action_taken_damaged_ppe',
        'checked_by',
        'remarks',
        'approved_by',
        'updated_by',
        'created_by',
        'approved_date'
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
