<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class TransitMixer extends Model
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
        'transit_mixer_des_1',
        'transit_mixer_des_2',
        'transit_mixer_des_3',
        'transit_mixer_des_4',
        'transit_mixer_des_5',
        'transit_mixer_des_6',
        'transit_mixer_des_7',
        'transit_mixer_des_8',
        'transit_mixer_des_9',
        'transit_mixer_des_10',
        'transit_mixer_des_11',
        'transit_mixer_des_12',
        'transit_mixer_des_13',
        'transit_mixer_des_14',
        'transit_mixer_des_15',
        'transit_mixer_des_16',
        'is_transit_mixer_1',
        'is_transit_mixer_2',
        'is_transit_mixer_3',
        'is_transit_mixer_4',
        'is_transit_mixer_5',
        'is_transit_mixer_6',
        'is_transit_mixer_7',
        'is_transit_mixer_8',
        'is_transit_mixer_9',
        'is_transit_mixer_10',
        'is_transit_mixer_11',
        'is_transit_mixer_12',
        'is_transit_mixer_13',
        'is_transit_mixer_14',
        'is_transit_mixer_15',
        'is_transit_mixer_16',
        'transit_mixer_remarks_1',
        'transit_mixer_remarks_2',
        'transit_mixer_remarks_3',
        'transit_mixer_remarks_4',
        'transit_mixer_remarks_5',
        'transit_mixer_remarks_6',
        'transit_mixer_remarks_7',
        'transit_mixer_remarks_8',
        'transit_mixer_remarks_9',
        'transit_mixer_remarks_10',
        'transit_mixer_remarks_11',
        'transit_mixer_remarks_12',
        'transit_mixer_remarks_13',
        'transit_mixer_remarks_14',
        'transit_mixer_remarks_15',
        'transit_mixer_remarks_16',
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
