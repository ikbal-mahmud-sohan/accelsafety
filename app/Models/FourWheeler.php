<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class FourWheeler extends Model
{
    /** @use HasFactory<\Database\Factories\FourWheelerFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'four_wheeler_des_1',
        'four_wheeler_des_2',
        'four_wheeler_des_3',
        'four_wheeler_des_4',
        'four_wheeler_des_5',
        'four_wheeler_des_6',
        'four_wheeler_des_7',
        'four_wheeler_des_8',
        'four_wheeler_des_9',
        'four_wheeler_des_10',
        'four_wheeler_des_11',
        'four_wheeler_des_12',
        'four_wheeler_des_13',
        'four_wheeler_des_14',
        'four_wheeler_des_15',
        'is_four_wheeler_1',
        'is_four_wheeler_2',
        'is_four_wheeler_3',
        'is_four_wheeler_4',
        'is_four_wheeler_5',
        'is_four_wheeler_6',
        'is_four_wheeler_7',
        'is_four_wheeler_8',
        'is_four_wheeler_9',
        'is_four_wheeler_10',
        'is_four_wheeler_11',
        'is_four_wheeler_12',
        'is_four_wheeler_13',
        'is_four_wheeler_14',
        'is_four_wheeler_15',
        'four_wheeler_remarks_1',
        'four_wheeler_remarks_2',
        'four_wheeler_remarks_3',
        'four_wheeler_remarks_4',
        'four_wheeler_remarks_5',
        'four_wheeler_remarks_6',
        'four_wheeler_remarks_7',
        'four_wheeler_remarks_8',
        'four_wheeler_remarks_9',
        'four_wheeler_remarks_10',
        'four_wheeler_remarks_11',
        'four_wheeler_remarks_12',
        'four_wheeler_remarks_13',
        'four_wheeler_remarks_14',
        'four_wheeler_remarks_15',
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
