<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class AirCompressor extends Model
{
    /** @use HasFactory<\Database\Factories\AirCompressorFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'air_compressor_des_1',
        'air_compressor_des_2',
        'air_compressor_des_3',
        'air_compressor_des_4',
        'air_compressor_des_5',
        'air_compressor_des_6',
        'air_compressor_des_7',
        'air_compressor_des_8',
        'air_compressor_des_9',
        'air_compressor_des_10',
        'air_compressor_des_11',
        'air_compressor_des_12',
        'is_air_compressor_1',
        'is_air_compressor_2',
        'is_air_compressor_3',
        'is_air_compressor_4',
        'is_air_compressor_5',
        'is_air_compressor_6',
        'is_air_compressor_7',
        'is_air_compressor_8',
        'is_air_compressor_9',
        'is_air_compressor_10',
        'is_air_compressor_11',
        'is_air_compressor_12',
        'air_compressor_remarks_1',
        'air_compressor_remarks_2',
        'air_compressor_remarks_3',
        'air_compressor_remarks_4',
        'air_compressor_remarks_5',
        'air_compressor_remarks_6',
        'air_compressor_remarks_7',
        'air_compressor_remarks_8',
        'air_compressor_remarks_9',
        'air_compressor_remarks_10',
        'air_compressor_remarks_11',
        'air_compressor_remarks_12',
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
