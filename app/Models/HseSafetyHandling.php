<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class HseSafetyHandling extends Model
{
    use HasFactory;
    protected $fillable =[
        'stt_1_complied',
        'stt_1_remarks',
        'stt_2_complied',
        'stt_2_remarks',
        'stt_3_complied',
        'stt_3_remarks',
        'stt_4_complied',
        'stt_4_remarks',
        'stt_5_complied',
        'stt_5_remarks',
        'stt_6_complied',
        'stt_6_remarks',
        'stt_7_complied',
        'stt_7_remarks',
        'stt_8_complied',
        'stt_8_remarks',
        'stt_9_complied',
        'checked_by',
        'reviewed_by',
        'checked_by_date',
        'reviewed_by_date',
        'checked_by_signature',
        'reviewed_by_signature',
        'approved_by',
        'updated_by',
        'created_by',
        'approved_date'
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
