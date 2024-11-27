<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class ChainPulleyBlock extends Model
{
    /** @use HasFactory<\Database\Factories\ChainPulleyBlockFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'chain_pulley_des_1',
        'chain_pulley_des_2',
        'chain_pulley_des_3',
        'chain_pulley_des_4',
        'chain_pulley_des_5',
        'chain_pulley_des_6',
        'is_chain_pulley_1',
        'is_chain_pulley_2',
        'is_chain_pulley_3',
        'is_chain_pulley_4',
        'is_chain_pulley_5',
        'is_chain_pulley_6',
        'chain_pulley_remarks_1',
        'chain_pulley_remarks_2',
        'chain_pulley_remarks_3',
        'chain_pulley_remarks_4',
        'chain_pulley_remarks_5',
        'chain_pulley_remarks_6',
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
