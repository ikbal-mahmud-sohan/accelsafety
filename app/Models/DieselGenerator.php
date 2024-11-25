<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class DieselGenerator extends Model
{
    /** @use HasFactory<\Database\Factories\DieselGeneratorFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'diesel_generator_des_1',
        'diesel_generator_des_2',
        'diesel_generator_des_3',
        'diesel_generator_des_4',
        'diesel_generator_des_5',
        'diesel_generator_des_6',
        'diesel_generator_des_7',
        'diesel_generator_des_8',
        'diesel_generator_des_9',
        'diesel_generator_des_10',
        'diesel_generator_des_11',
        'diesel_generator_des_12',
        'diesel_generator_des_13',
        'diesel_generator_des_14',
        'is_diesel_generator_1',
        'is_diesel_generator_2',
        'is_diesel_generator_3',
        'is_diesel_generator_4',
        'is_diesel_generator_5',
        'is_diesel_generator_6',
        'is_diesel_generator_7',
        'is_diesel_generator_8',
        'is_diesel_generator_9',
        'is_diesel_generator_10',
        'is_diesel_generator_11',
        'is_diesel_generator_12',
        'is_diesel_generator_13',
        'is_diesel_generator_14',
        'diesel_generator_remarks_1',
        'diesel_generator_remarks_2',
        'diesel_generator_remarks_3',
        'diesel_generator_remarks_4',
        'diesel_generator_remarks_5',
        'diesel_generator_remarks_6',
        'diesel_generator_remarks_7',
        'diesel_generator_remarks_8',
        'diesel_generator_remarks_9',
        'diesel_generator_remarks_10',
        'diesel_generator_remarks_11',
        'diesel_generator_remarks_12',
        'diesel_generator_remarks_13',
        'diesel_generator_remarks_14',
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
