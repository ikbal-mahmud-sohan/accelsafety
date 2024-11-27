<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class LiftingToolsTackles extends Model
{
    /** @use HasFactory<\Database\Factories\LiftingToolsTacklesFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'lifting_tools_des_1',
        'lifting_tools_des_2',
        'lifting_tools_des_3',
        'lifting_tools_des_4',
        'lifting_tools_des_5',
        'lifting_tools_des_6',
        'lifting_tools_des_7',
        'lifting_tools_des_8',
        'lifting_tools_des_9',
        'is_lifting_tools_1',
        'is_lifting_tools_2',
        'is_lifting_tools_3',
        'is_lifting_tools_4',
        'is_lifting_tools_5',
        'is_lifting_tools_6',
        'is_lifting_tools_7',
        'is_lifting_tools_8',
        'is_lifting_tools_9',
        'lifting_tools_remarks_1',
        'lifting_tools_remarks_2',
        'lifting_tools_remarks_3',
        'lifting_tools_remarks_4',
        'lifting_tools_remarks_5',
        'lifting_tools_remarks_6',
        'lifting_tools_remarks_7',
        'lifting_tools_remarks_8',
        'lifting_tools_remarks_9',
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
