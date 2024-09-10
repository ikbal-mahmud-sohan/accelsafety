<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccidentInvestigation extends Model
{
    use HasFactory;
    protected $fillable =[
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
    public function employee()
    {
        return $this->belongsTo(EmployeeInfo::class, 'employee_id');
    }
}
