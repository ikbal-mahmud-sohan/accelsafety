<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class PowerDistributionPanel extends Model
{
    /** @use HasFactory<\Database\Factories\PowerDistributionPanelFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'power_distribution_des_1',
        'power_distribution_des_2',
        'power_distribution_des_3',
        'power_distribution_des_4',
        'power_distribution_des_5',
        'power_distribution_des_6',
        'power_distribution_des_7',
        'power_distribution_des_8',
        'power_distribution_des_9',
        'power_distribution_des_10',
        'power_distribution_des_11',
        'power_distribution_des_12',
        'power_distribution_des_13',
        'power_distribution_des_14',
        'is_power_distribution_1',
        'is_power_distribution_2',
        'is_power_distribution_3',
        'is_power_distribution_4',
        'is_power_distribution_5',
        'is_power_distribution_6',
        'is_power_distribution_7',
        'is_power_distribution_8',
        'is_power_distribution_9',
        'is_power_distribution_10',
        'is_power_distribution_11',
        'is_power_distribution_12',
        'is_power_distribution_13',
        'is_power_distribution_14',
        'power_distribution_remarks_1',
        'power_distribution_remarks_2',
        'power_distribution_remarks_3',
        'power_distribution_remarks_4',
        'power_distribution_remarks_5',
        'power_distribution_remarks_6',
        'power_distribution_remarks_7',
        'power_distribution_remarks_8',
        'power_distribution_remarks_9',
        'power_distribution_remarks_10',
        'power_distribution_remarks_11',
        'power_distribution_remarks_12',
        'power_distribution_remarks_13',
        'power_distribution_remarks_14',
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
