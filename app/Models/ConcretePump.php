<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class ConcretePump extends Model
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
        'hired',
        'contractor',
        'concrete_mixer_des_1',
        'concrete_mixer_des_2',
        'concrete_mixer_des_3',
        'concrete_mixer_des_4',
        'concrete_mixer_des_5',
        'concrete_mixer_des_6',
        'concrete_mixer_des_7',
        'concrete_mixer_des_8',
        'concrete_mixer_des_9',
        'concrete_mixer_des_10',
        'concrete_mixer_des_11',
        'concrete_mixer_des_12',
        'concrete_mixer_des_13',
        'concrete_mixer_des_14',
        'is_concrete_mixer_1',
        'is_concrete_mixer_2',
        'is_concrete_mixer_3',
        'is_concrete_mixer_4',
        'is_concrete_mixer_5',
        'is_concrete_mixer_6',
        'is_concrete_mixer_7',
        'is_concrete_mixer_8',
        'is_concrete_mixer_9',
        'is_concrete_mixer_10',
        'is_concrete_mixer_11',
        'is_concrete_mixer_12',
        'is_concrete_mixer_13',
        'is_concrete_mixer_14',
        'concrete_mixer_remarks_1',
        'concrete_mixer_remarks_2',
        'concrete_mixer_remarks_3',
        'concrete_mixer_remarks_4',
        'concrete_mixer_remarks_5',
        'concrete_mixer_remarks_6',
        'concrete_mixer_remarks_7',
        'concrete_mixer_remarks_8',
        'concrete_mixer_remarks_9',
        'concrete_mixer_remarks_10',
        'concrete_mixer_remarks_11',
        'concrete_mixer_remarks_12',
        'concrete_mixer_remarks_13',
        'concrete_mixer_remarks_14',
        'fit',
        'partially_fit',
        'unfit',
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
