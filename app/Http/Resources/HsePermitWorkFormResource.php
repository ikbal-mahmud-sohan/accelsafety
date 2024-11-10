<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HsePermitWorkFormResource extends JsonResource
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
            'permit_no' => $this->permit_no,
            'issue_date' => $this->issue_date,
            'ptw_time' => $this->ptw_time,
            'ptw_dept_name' => $this->ptw_dept_name,
            'ptw_from_dept_name' => $this->ptw_from_dept_name,
            'ptw_to_dept_name' => $this->ptw_to_dept_name,
            'ptw_work_agency' => $this->ptw_work_agency,
            'ptw_description' => $this->ptw_description,
            'ptw_of_job' => $this->ptw_of_job,
            'ptw_job' => $this->ptw_job,
            'ptw_issuer' => $this->ptw_issuer,
            'ptw_lead_signature' => $this->ptw_lead_signature,
            'hazards' => $this->hazards,
            'general_hazards' => $this->general_hazards,
            'general_control' => $this->general_control,
            'work_at_height_hazards' => $this->work_at_height_hazards,
            'work_at_height_control' => $this->work_at_height_control,
            'confined_space_hazards' => $this->confined_space_hazards,
            'confined_space_control' => $this->confined_space_control,
            'electrical_work_hazards' => $this->electrical_work_hazards,
            'electrical_work_control' => $this->electrical_work_control,
            'hot_work_hazards' => $this->hot_work_hazards,
            'hot_work_control' => $this->hot_work_control,
            'mechanical_work_hazards' => $this->mechanical_work_hazards,
            'mechanical_work_control' => $this->mechanical_work_control,
            'civil_work_hazards' => $this->civil_work_hazards,
            'civil_work_control' => $this->civil_work_control,
            'ppe_please' => $this->ppe_please,
            'ppe_isolate' => $this->ppe_isolate,
            'ppe_the' => $this->ppe_the,
            'ppe_equipment' => $this->ppe_equipment,
            'ppe_engineer_signature' => $this->ppe_engineer_signature,
            'ppe_lead_signature' => $this->ppe_lead_signature,
            'ppe_receiver_name' => $this->ppe_receiver_name,
            'ppe_receiver_signature' => $this->ppe_receiver_signature,
            'ppe_receiver_date' => $this->ppe_receiver_date,
            'ack_name' => $this->ack_name,
            'ack_signature' => $this->ack_signature,
            'ack_dept' => $this->ack_dept,
            'ack_supervisor_name' => $this->ack_supervisor_name,
            'ack_supervisor_signature' => $this->ack_supervisor_signature,
            'ack_supervisor_dept' => $this->ack_supervisor_dept,
            'ack_name_of_workers' => $this->ack_name_of_workers,
            'ack_approval_name' => $this->ack_approval_name,
            'ack_approval_signature' => $this->ack_approval_signature,
            'job_completion_date' => $this->job_completion_date,
            'job_completion_time' => $this->job_completion_time,
            'job_completion_signature' => $this->job_completion_signature,
            'ptw_date_1' => $this->ptw_date_1,
            'ptw_work_agency_1' => $this->ptw_work_agency_1,
            'ptw_receiver_1' => $this->ptw_receiver_1,
            'ptw_location_In_Charge_1' => $this->ptw_location_In_Charge_1,
            'ptw_work_after_6pm_1' => $this->ptw_work_after_6pm_1,
            'ptw_date_2' => $this->ptw_date_2,
            'ptw_work_agency_2' => $this->ptw_work_agency_2,
            'ptw_receiver_2' => $this->ptw_receiver_2,
            'ptw_location_In_Charge_2' => $this->ptw_location_In_Charge_2,
            'ptw_work_after_6pm_2' => $this->ptw_work_after_6pm_2,
            'ptw_date_3' => $this->ptw_date_3,
            'ptw_work_agency_3' => $this->ptw_work_agency_3,
            'ptw_receiver_3' => $this->ptw_receiver_3,
            'ptw_location_In_Charge_3' => $this->ptw_location_In_Charge_3,
            'ptw_work_after_6pm_3' => $this->ptw_work_after_6pm_3,
            'ptw_date_4' => $this->ptw_date_4,
            'ptw_work_agency_4' => $this->ptw_work_agency_4,
            'ptw_receiver_4' => $this->ptw_receiver_4,
            'ptw_location_In_Charge_4' => $this->ptw_location_In_Charge_4,
            'ptw_work_after_6pm_4' => $this->ptw_work_after_6pm_4,
            'approved_by' => $this->approved_by,
            'updated_by' => $this->updated_by,
            'created_by' => $this->created_by,
            'approved_date' => $this->approved_date,
        ];
    }
}
