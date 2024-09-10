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
        ];;
    }
}
