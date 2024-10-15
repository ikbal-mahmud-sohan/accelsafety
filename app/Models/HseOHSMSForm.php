<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class HseOHSMSForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'factory_name',
        'date',
        'location',
        'ohsmsf_sign_1',
        'ohsmsf_sign_2',
        'ohsmsf_sign_3',
        'ohsmsf_sign_4',
        'ohsmsf_sign_5',
        'ohsmsf_sign_6',
        'ohsmsf_sign_7',
        'ohsmsf_sign_8',
        'ohsmsf_sign_9',
        'ohsmsf_sign_10',
        'ohsmsf_sign_11',
        'ohsmsf_sign_12',
        'ohsmsf_sign_13',
        'ohsmsf_sign_14',
        'ohsmsf_sign_15',
        'approved_by',
        'updated_by',
        'created_by',
        'approved_date'
    ];

    public function approvedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by');
    }


    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Get the user who last updated the document.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}

