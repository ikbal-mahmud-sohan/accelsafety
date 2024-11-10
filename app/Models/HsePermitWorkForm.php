<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class HsePermitWorkForm extends Model
{
    use HasFactory;
    protected $fillable =[
            'permit_no',
            'issue_date',
            'ptw_time',
            'ptw_dept_name',
            'ptw_from_dept_name',
            'ptw_to_dept_name',
            'ptw_work_agency',
            'ptw_description',
            'ptw_of_job',
            'ptw_job',
            'ptw_issuer',
            'ptw_lead_signature',
            'hazards',
            'general_hazards',
            'general_control',
            'work_at_height_hazards',
            'work_at_height_control',
            'confined_space_hazards',
            'confined_space_control',
            'electrical_work_hazards',
            'electrical_work_control',
            'hot_work_hazards',
            'hot_work_control',
            'mechanical_work_hazards',
            'mechanical_work_control',
            'civil_work_hazards',
            'civil_work_control',
            'ppe_please',
            'ppe_isolate',
            'ppe_the',
            'ppe_equipment',
            'ppe_engineer_signature',
            'ppe_lead_signature',
            'ppe_receiver_name',
            'ppe_receiver_signature',
            'ppe_receiver_date',
            'ack_name',
            'ack_signature',
            'ack_dept',
            'ack_supervisor_name',
            'ack_supervisor_signature',
            'ack_supervisor_dept',
            'ack_name_of_workers',
            'ack_approval_name',
            'ack_approval_signature',
            'job_completion_date',
            'job_completion_time',
            'job_completion_signature',
            'ptw_date_1',
            'ptw_work_agency_1',
            'ptw_receiver_1',
            'ptw_location_In_Charge_1',
            'ptw_work_after_6pm_1',
            'ptw_date_2',
            'ptw_work_agency_2',
            'ptw_receiver_2',
            'ptw_location_In_Charge_2',
            'ptw_work_after_6pm_2',
            'ptw_date_3',
            'ptw_work_agency_3',
            'ptw_receiver_3',
            'ptw_location_In_Charge_3',
            'ptw_work_after_6pm_3',
            'ptw_date_4',
            'ptw_work_agency_4',
            'ptw_receiver_4',
            'ptw_location_In_Charge_4',
            'ptw_work_after_6pm_4',
            'approved_by',
            'updated_by',
            'created_by',
            'approved_date'
    ];

    protected $casts = [
        'ptw_lead_signature' => 'array', 
        'hazards' => 'array', 
        'general_hazards' => 'array', 
        'general_control' => 'array', 
        'work_at_height_hazards' => 'array', 
        'work_at_height_control' => 'array', 
        'confined_space_hazards' => 'array', 
        'confined_space_control' => 'array', 
        'electrical_work_hazards' => 'array', 
        'electrical_work_control' => 'array', 
        'hot_work_hazards' => 'array', 
        'hot_work_control' => 'array', 
        'mechanical_work_hazards' => 'array', 
        'mechanical_work_control' => 'array', 
        'civil_work_hazards' => 'array', 
        'civil_work_control' => 'array', 
        'ppe_engineer_signature' => 'array', 
        'ppe_lead_signature' => 'array', 
        'ppe_receiver_signature' => 'array', 
        'ack_signature' => 'array', 
        'ack_supervisor_signature' => 'array', 
        'ack_name_of_workers' => 'array', 
        'ack_approval_signature' => 'array', 
        'job_completion_signature' => 'array'
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
