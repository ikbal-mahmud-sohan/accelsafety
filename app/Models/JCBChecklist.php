<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class JCBChecklist extends Model
{
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'jcb_des_1',
        'jcb_des_2',
        'jcb_des_3',
        'jcb_des_4',
        'jcb_des_5',
        'jcb_des_6',
        'jcb_des_7',
        'jcb_des_8',
        'jcb_des_9',
        'jcb_des_10',
        'jcb_des_11',
        'jcb_des_12',
        'jcb_des_13',
        'jcb_des_14',
        'is_jcb_1',
        'is_jcb_2',
        'is_jcb_3',
        'is_jcb_4',
        'is_jcb_5',
        'is_jcb_6',
        'is_jcb_7',
        'is_jcb_8',
        'is_jcb_9',
        'is_jcb_10',
        'is_jcb_11',
        'is_jcb_12',
        'is_jcb_13',
        'is_jcb_14',
        'jcb_remarks_1',
        'jcb_remarks_2',
        'jcb_remarks_3',
        'jcb_remarks_4',
        'jcb_remarks_5',
        'jcb_remarks_6',
        'jcb_remarks_7',
        'jcb_remarks_8',
        'jcb_remarks_9',
        'jcb_remarks_10',
        'jcb_remarks_11',
        'jcb_remarks_12',
        'jcb_remarks_13',
        'jcb_remarks_14',
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



































