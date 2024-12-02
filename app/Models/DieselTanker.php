<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class DieselTanker extends Model
{
    /** @use HasFactory<\Database\Factories\DieselTankerFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'diesel_tanker_des_1',
        'diesel_tanker_des_2',
        'diesel_tanker_des_3',
        'diesel_tanker_des_4',
        'diesel_tanker_des_5',
        'diesel_tanker_des_6',
        'diesel_tanker_des_7',
        'diesel_tanker_des_8',
        'diesel_tanker_des_9',
        'diesel_tanker_des_10',
        'diesel_tanker_des_11',
        'diesel_tanker_des_12',
        'diesel_tanker_des_13',
        'diesel_tanker_des_14',
        'diesel_tanker_des_15',
        'diesel_tanker_des_16',
        'diesel_tanker_des_17',
        'diesel_tanker_des_18',
        'diesel_tanker_des_19',
        'is_diesel_tanker_1',
        'is_diesel_tanker_2',
        'is_diesel_tanker_3',
        'is_diesel_tanker_4',
        'is_diesel_tanker_5',
        'is_diesel_tanker_6',
        'is_diesel_tanker_7',
        'is_diesel_tanker_8',
        'is_diesel_tanker_9',
        'is_diesel_tanker_10',
        'is_diesel_tanker_11',
        'is_diesel_tanker_12',
        'is_diesel_tanker_13',
        'is_diesel_tanker_14',
        'is_diesel_tanker_15',
        'is_diesel_tanker_16',
        'is_diesel_tanker_17',
        'is_diesel_tanker_18',
        'is_diesel_tanker_19',
        'diesel_tanker_remarks_1',
        'diesel_tanker_remarks_2',
        'diesel_tanker_remarks_3',
        'diesel_tanker_remarks_4',
        'diesel_tanker_remarks_5',
        'diesel_tanker_remarks_6',
        'diesel_tanker_remarks_7',
        'diesel_tanker_remarks_8',
        'diesel_tanker_remarks_9',
        'diesel_tanker_remarks_10',
        'diesel_tanker_remarks_11',
        'diesel_tanker_remarks_12',
        'diesel_tanker_remarks_13',
        'diesel_tanker_remarks_14',
        'diesel_tanker_remarks_15',
        'diesel_tanker_remarks_16',
        'diesel_tanker_remarks_17',
        'diesel_tanker_remarks_18',
        'diesel_tanker_remarks_19',
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
