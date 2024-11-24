<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BarCuttingMachine extends Model
{
    /** @use HasFactory<\Database\Factories\BarCuttingMachineFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'bar_cutting_des_1',
        'bar_cutting_des_2',
        'bar_cutting_des_3',
        'bar_cutting_des_4',
        'bar_cutting_des_5',
        'bar_cutting_des_6',
        'bar_cutting_des_7',
        'bar_cutting_des_8',
        'is_bar_cutting_1',
        'is_bar_cutting_2',
        'is_bar_cutting_3',
        'is_bar_cutting_4',
        'is_bar_cutting_5',
        'is_bar_cutting_6',
        'is_bar_cutting_7',
        'is_bar_cutting_8',
        'bar_cutting_remarks_1',
        'bar_cutting_remarks_2',
        'bar_cutting_remarks_3',
        'bar_cutting_remarks_4',
        'bar_cutting_remarks_5',
        'bar_cutting_remarks_6',
        'bar_cutting_remarks_7',
        'bar_cutting_remarks_8',
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
