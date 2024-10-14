<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class HsePPEDistributionRegister extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'contractor_name',
        'process',
        'ppe',
        'quantity',
        'date_of_issue',
        'date_of_return',
        'receiver_signature',
        'remarks',
        'approved_by',
        'updated_by',
        'created_by',
        'approved_date',
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
