<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Trailer extends Model
{
    /** @use HasFactory<\Database\Factories\TrailerFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'trailer_des_1',
        'trailer_des_2',
        'trailer_des_3',
        'trailer_des_4',
        'trailer_des_5',
        'trailer_des_6',
        'trailer_des_7',
        'trailer_des_8',
        'trailer_des_9',
        'trailer_des_10',
        'trailer_des_11',
        'trailer_des_12',
        'trailer_des_13',
        'trailer_des_14',
        'trailer_des_15',
        'is_trailer_1',
        'is_trailer_2',
        'is_trailer_3',
        'is_trailer_4',
        'is_trailer_5',
        'is_trailer_6',
        'is_trailer_7',
        'is_trailer_8',
        'is_trailer_9',
        'is_trailer_10',
        'is_trailer_11',
        'is_trailer_12',
        'is_trailer_13',
        'is_trailer_14',
        'is_trailer_15',
        'trailer_remarks_1',
        'trailer_remarks_2',
        'trailer_remarks_3',
        'trailer_remarks_4',
        'trailer_remarks_5',
        'trailer_remarks_6',
        'trailer_remarks_7',
        'trailer_remarks_8',
        'trailer_remarks_9',
        'trailer_remarks_10',
        'trailer_remarks_11',
        'trailer_remarks_12',
        'trailer_remarks_13',
        'trailer_remarks_14',
        'trailer_remarks_15',
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
