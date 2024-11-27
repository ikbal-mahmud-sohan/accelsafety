<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class FireExtinguisher extends Model
{
    /** @use HasFactory<\Database\Factories\FireExtinguisherFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'fire_extinguisher_des_1',
        'fire_extinguisher_des_2',
        'fire_extinguisher_des_3',
        'fire_extinguisher_des_4',
        'fire_extinguisher_des_5',
        'fire_extinguisher_des_6',
        'fire_extinguisher_des_7',
        'fire_extinguisher_des_8',
        'is_fire_extinguisher_1',
        'is_fire_extinguisher_2',
        'is_fire_extinguisher_3',
        'is_fire_extinguisher_4',
        'is_fire_extinguisher_5',
        'is_fire_extinguisher_6',
        'is_fire_extinguisher_7',
        'is_fire_extinguisher_8',
        'fire_extinguisher_remarks_1',
        'fire_extinguisher_remarks_2',
        'fire_extinguisher_remarks_3',
        'fire_extinguisher_remarks_4',
        'fire_extinguisher_remarks_5',
        'fire_extinguisher_remarks_6',
        'fire_extinguisher_remarks_7',
        'fire_extinguisher_remarks_8',
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
