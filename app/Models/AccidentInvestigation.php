<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidentInvestigation extends Model
{
    const STATUS_ASSIGNED = 'Assigned';
    const STATUS_REVIEWED = 'Reviewed';
    const STATUS_APPROVED = 'Approved';
    const STATUS_CHANGE_REQUEST = 'change_request';

    use HasFactory;

    protected $fillable = [
        'accident_id',
        'investigation_name_1',
        'investigation_designation_1',
        'investigation_sign_1',
        'investigation_name_2',
        'investigation_designation_2',
        'investigation_sign_2',
        'investigation_name_3',
        'investigation_designation_3',
        'investigation_sign_3',
        'investigation_name_4',
        'investigation_designation_4',
        'investigation_sign_4',
        'type_of_employee',
        'type_of_accident',
        'nature_of_injury',
        'employee_id',
        'employee_department',
        'emp_id',
        'accident_details',
        // 'taken_action',
        'unsafe_acts',
        'unsafe_conditions',
        'management_deficiencies',
        'root_cause_1',
        'corrective_action_1',
        'person_assigned_1',
        'target_date_1',
        'complete_date_1',
        'root_cause_2',
        'corrective_action_2',
        'person_assigned_2',
        'target_date_2',
        'complete_date_2',
        'root_cause_3',
        'corrective_action_3',
        'person_assigned_3',
        'target_date_3',
        'complete_date_3',
        'reviewed_by_department_name',
        'reviewed_by_unit_name',
        'approved_by_name',
        'reviewed_by_department_signature',
        'reviewed_by_unit_signature',
        'approved_by_signature',

        'name_of_the_factory',
        'date_of_accident',
        'accident_time',
        'accident_shift',
        'date_of_accident',
        'effected_body_part',
        'employee_job_title',
        'employee_age',
        'employee_phone_no',
        'employee_address',
        'employee_experience',
        'area_in_charge_name',
        'area_in_charge_phone_no',
        'witness_name',
        'witness_phone_no',
        'accident_exact_location',
        'accident_initiatives',
        'unsafe_acts_why_therefore_1',
        'unsafe_conditions_why_therefore_1',
        'management_deficiency_why_therefore_1',
        'unsafe_acts_why_therefore_2',
        'unsafe_conditions_why_therefore_2',
        'management_deficiency_why_therefore_2',
        'unsafe_acts_why_therefore_3',
        'unsafe_conditions_why_therefore_3',
        'management_deficiency_why_therefore_3',
        'unsafe_acts_why_therefore_4',
        'unsafe_conditions_why_therefore_4',
        'management_deficiency_why_therefore_4',
        'unsafe_acts_why_therefore_5',
        'unsafe_conditions_why_therefore_5',
        'management_deficiency_why_therefore_5',
        'unsafe_acts_title',
        'unsafe_conditions_title',
        'management_deficiency_title',
        'root_cause_des1',
        'root_cause_des2',
        'root_cause_des3',
        'status',
    ];
    protected $casts = [
        'type_of_employee' => 'array',
        'type_of_accident' => 'array',
        'nature_of_injury' => 'array',
        'unsafe_acts' => 'array',
        'unsafe_conditions' => 'array',
        'management_deficiencies' => 'array',
        'investigation_sign_1' => 'array',
        'investigation_sign_2' => 'array',
        'investigation_sign_3' => 'array',
        'investigation_sign_4' => 'array',
        'reviewed_by_department_signature' => 'array',
        'reviewed_by_unit_signature' => 'array',
        'approved_by_signature' => 'array',
    ];

    public function accident()
    {
        return $this->belongsTo(Accident::class, 'accident_id');
    }

    public function employee()
    {
        return $this->belongsTo(EmployeeInfo::class, 'employee_id');
    }




}
