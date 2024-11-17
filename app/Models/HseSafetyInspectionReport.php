<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class HseSafetyInspectionReport extends Model
{
    use HasFactory;
    protected $fillable =[
        'location',
        'date_of_inspection',
        'ins_reports_des_1',
        'ins_reports_des_2',
        'ins_reports_des_3',
        'ins_reports_des_4',
        'ins_reports_des_5',
        'ins_reports_des_6',
        'ins_reports_des_7',
        'ins_reports_des_8',
        'ins_reports_des_9',
        'ins_reports_des_10',
        'ins_reports_des_11',
        'ins_reports_des_12',
        'ins_reports_des_13',
        'ins_reports_des_remarks_1',
        'ins_reports_des_remarks_2',
        'ins_reports_des_remarks_3',
        'ins_reports_des_remarks_4',
        'ins_reports_des_remarks_5',
        'ins_reports_des_remarks_6',
        'ins_reports_des_remarks_7',
        'ins_reports_des_remarks_8',
        'ins_reports_des_remarks_9',
        'ins_reports_des_remarks_10',
        'ins_reports_des_remarks_11',
        'ins_reports_des_remarks_12',
        'ins_reports_des_remarks_13',
        'name_of_inspector',
        'designation',
        'signature',
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

