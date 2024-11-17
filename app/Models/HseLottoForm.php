<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class HseLottoForm extends Model
{
    use HasFactory;
    protected $fillable =[
        'location',
        'date',
        'work_performed',
        'contact_person_name',
        'designation',
        'energy',
        'lag_out_des1',
        'lag_out_des2',
        'lag_out_des3',
        'lag_out_des4',
        'lag_out_des5',
        'lag_out_des6',
        'lag_out_des7',
        'lag_out_des8',
        'lag_out_des9',
        'lag_out_des10',
        'lag_out_name',
        'lag_out_designation',
        'lag_out_date',
        'tag_out_name',
        'tag_out_designation',
        'tag_out_date',
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
