<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsgecBackhoeLoader extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'hired',
        'contractor',
        'is_des_1',
        'des_remarks_1',
        'is_des_2',
        'des_remarks_2',
        'is_des_3',
        'des_remarks_3',
        'is_des_4',
        'des_remarks_4',
        'is_des_5',
        'des_remarks_5',
        'is_des_6',
        'des_remarks_6',
        'is_des_7',
        'des_remarks_7',
        'is_des_8',
        'des_remarks_8',
        'is_des_9',
        'des_remarks_9',
        'is_des_10',
        'des_remarks_10',
        'is_des_11',
        'des_remarks_11',
        'is_des_12',
        'des_remarks_12',
        'is_des_13',
        'des_remarks_13',
        'is_des_14',
        'des_remarks_14',
        'is_fit',
        'is_partially_fit',
        'is_unfit',
        'inspected_by_name',
        'inspected_by_signature',
        'inspected_by_date',
        'reviewed_by_name',
        'reviewed_by_signature',
        'reviewed_by_date',
    ];

    protected $casts = [
        'inspected_by_signature' => 'array', 
        'reviewed_by_signature' => 'array', 
    ];
}
