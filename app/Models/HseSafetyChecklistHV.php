<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class HseSafetyChecklistHV extends Model
{
    use HasFactory;
    protected $fillable =[
        'hv_des_1',
        'is_hv_complied_1',
        'hv_remarks_1',
        'hv_des_2',
        'is_hv_complied_2',
        'hv_remarks_2',
        'hv_des_3',
        'is_hv_complied_3',
        'hv_remarks_3',
        'hv_des_4',
        'is_hv_complied_4',
        'hv_remarks_4',
        'hv_des_5',
        'is_hv_complied_5',
        'hv_remarks_5',
        'hv_des_6',
        'is_hv_complied_6',
        'hv_remarks_6',
        'hv_des_7',
        'is_hv_complied_7',
        'hv_remarks_7',
        'hv_des_8',
        'is_hv_complied_8',
        'hv_remarks_8',
        'hv_des_9',
        'is_hv_complied_9',
        'hv_remarks_9',
        'hv_des_10',
        'is_hv_complied_10',
        'hv_remarks_10',
        'hv_des_11',
        'is_hv_complied_11',
        'hv_remarks_11',
        'checked_by',
        'reviewed_by',
        'checked_by_date',
        'reviewed_by_date',
        'checked_by_signature',
        'reviewed_by_signature',
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
