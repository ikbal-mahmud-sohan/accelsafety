<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class SandBlastingSet extends Model
{
    /** @use HasFactory<\Database\Factories\SandBlastingSetFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'sand_blasting_des_1',
        'sand_blasting_des_2',
        'sand_blasting_des_3',
        'sand_blasting_des_4',
        'sand_blasting_des_5',
        'sand_blasting_des_6',
        'sand_blasting_des_7',
        'sand_blasting_des_8',
        'is_sand_blasting_1',
        'is_sand_blasting_2',
        'is_sand_blasting_3',
        'is_sand_blasting_4',
        'is_sand_blasting_5',
        'is_sand_blasting_6',
        'is_sand_blasting_7',
        'is_sand_blasting_8',
        'sand_blasting_remarks_1',
        'sand_blasting_remarks_2',
        'sand_blasting_remarks_3',
        'sand_blasting_remarks_4',
        'sand_blasting_remarks_5',
        'sand_blasting_remarks_6',
        'sand_blasting_remarks_7',
        'sand_blasting_remarks_8',
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
