<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AccidentInvestigationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'id' => $this->id,
        'accident_id' => $this->accident_id,
        'investigation_name_1' => $this->investigation_name_1,
        'investigation_designation_1' => $this->investigation_designation_1,
        'investigation_sign_1' => $this->investigation_sign_1,
        'investigation_name_2' => $this->investigation_name_2,
        'investigation_designation_2' => $this->investigation_designation_2,
        'investigation_sign_2' => $this->investigation_sign_2,
        'investigation_name_3' => $this->investigation_name_3,
        'investigation_designation_3' => $this->investigation_designation_3,
        'investigation_sign_3' => $this->investigation_sign_3,
        'investigation_name_4' => $this->investigation_name_4,
        'investigation_designation_4' => $this->investigation_designation_4,
        'investigation_sign_4' => $this->investigation_sign_4,
        'type_of_employee' => $this->type_of_employee,
        'type_of_accident' => $this->type_of_accident,
        'nature_of_injury' => $this->nature_of_injury,
        'employee_id' => $this->employee_id,
        'employee_department' => $this->employee_department,
        'emp_id' => $this->emp_id,
        'accident_details' => $this->accident_details,
        'unsafe_acts' => $this->unsafe_acts,
        'unsafe_conditions' => $this->unsafe_conditions,
        'management_deficiencies' => $this->management_deficiencies,
        'root_cause_1' => $this->root_cause_1,
        'corrective_action_1' => $this->corrective_action_1,
        'person_assigned_1' => $this->person_assigned_1,
        'target_date_1' => $this->target_date_1,
        'complete_date_1' => $this->complete_date_1,
        'root_cause_2' => $this->root_cause_2,
        'corrective_action_2' => $this->corrective_action_2,
        'person_assigned_2' => $this->person_assigned_2,
        'target_date_2' => $this->target_date_2,
        'complete_date_2' => $this->complete_date_2,
        'root_cause_3' => $this->root_cause_3,
        'corrective_action_3' => $this->corrective_action_3,
        'person_assigned_3' => $this->person_assigned_3,
        'target_date_3' => $this->target_date_3,
        'complete_date_3' => $this->complete_date_3,
        'reviewed_by_department_name' => $this->reviewed_by_department_name,
        'reviewed_by_unit_name' => $this->reviewed_by_unit_name,
        'approved_by_name' => $this->approved_by_name,
        'reviewed_by_department_signature' => $this->reviewed_by_department_signature,
        'reviewed_by_unit_signature' => $this->reviewed_by_unit_signature,
        'approved_by_signature' => $this->approved_by_signature,
        'employee_name' => $this->employee_name,
        'name_1' => $this->name_1,
        'name_2' => $this->name_2,
        'name_3' => $this->name_3,
        'name_4' => $this->name_4,
        'name_of_the_factory' => $this->name_of_the_factory,
        'date_of_accident' => $this->date_of_accident,
        'accident_time' => $this->accident_time,
        'accident_shift' => $this->accident_shift,
        'effected_body_part' => $this->effected_body_part,
        'employee_job_title' => $this->employee_job_title,
        'employee_age' => $this->employee_age,
        'employee_phone_no' => $this->employee_phone_no,
        'employee_address' => $this->employee_address,
        'employee_experience' => $this->employee_experience,
        'area_in_charge_name' => $this->area_in_charge_name,
        'area_in_charge_phone_no' => $this->area_in_charge_phone_no,
        'witness_name' => $this->witness_name,
        'witness_phone_no' => $this->witness_phone_no,
        'accident_exact_location' => $this->accident_exact_location,
        'accident_initiatives' => $this->accident_initiatives,
        'unsafe_acts_why_therefore_1' => $this->unsafe_acts_why_therefore_1,
        'unsafe_conditions_why_therefore_1' => $this->unsafe_conditions_why_therefore_1,
        'management_deficiency_why_therefore_1' => $this->management_deficiency_why_therefore_1,
        'unsafe_acts_why_therefore_2' => $this->unsafe_acts_why_therefore_2,
        'unsafe_conditions_why_therefore_2' => $this->unsafe_conditions_why_therefore_2,
        'management_deficiency_why_therefore_2' => $this->management_deficiency_why_therefore_2,
        'unsafe_acts_why_therefore_3' => $this->unsafe_acts_why_therefore_3,
        'unsafe_conditions_why_therefore_3' => $this->unsafe_conditions_why_therefore_3,
        'management_deficiency_why_therefore_3' => $this->management_deficiency_why_therefore_3,
        'unsafe_acts_why_therefore_4' => $this->unsafe_acts_why_therefore_4,
        'unsafe_conditions_why_therefore_4' => $this->unsafe_conditions_why_therefore_4,
        'management_deficiency_why_therefore_4' => $this->management_deficiency_why_therefore_4,
        'unsafe_acts_why_therefore_5' => $this->unsafe_acts_why_therefore_5,
        'unsafe_conditions_why_therefore_5' => $this->unsafe_conditions_why_therefore_5,
        'management_deficiency_why_therefore_5' => $this->management_deficiency_why_therefore_5,
        'unsafe_acts_title' => $this->unsafe_acts_title,
        'unsafe_conditions_title' => $this->unsafe_conditions_title,
        'management_deficiency_title' => $this->management_deficiency_title,
        'root_cause_des1' => $this->root_cause_des1,
        'root_cause_des2' => $this->root_cause_des2,
        'root_cause_des3' => $this->root_cause_des3,
        'status' => $this->status,

        ];;
    }
}
