<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseIncidentNotificationResource extends JsonResource
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
            'shift_incharge_facility_name' => $this->shift_incharge_facility_name,
            'shift_incharge_date_of_incident' => $this->shift_incharge_date_of_incident,
            'shift_incharge_time' => $this->shift_incharge_time,
            'shift_incharge_shift' => $this->shift_incharge_shift,
            'shift_incharge_location_of_incident' => $this->shift_incharge_location_of_incident,
            'involved_party_name' => $this->involved_party_name,
            'involved_party_department' => $this->involved_party_department,
            'involved_party_job_title' => $this->involved_party_job_title,
            'involved_party_property_damaged' => $this->involved_party_property_damaged,
            'involved_party_employee_id' => $this->involved_party_employee_id,
            'involved_party_age' => $this->involved_party_age,
            'involved_party_mobile_no' => $this->involved_party_mobile_no,
            'involved_party_property_name' => $this->involved_party_property_name,
            'involved_party_adress' => $this->involved_party_adress,
            'involved_party_approximate_cost' => $this->involved_party_approximate_cost,
            'brief_description' => $this->brief_description,
            'immediate_action_taken' => $this->immediate_action_taken,
            'name_of_shift_in_charge' => $this->name_of_shift_in_charge,
            'name_of_shift_in_charge_mobile' => $this->name_of_shift_in_charge_mobile,
            'list_of_witness_name_1' => $this->list_of_witness_name_1,
            'list_of_witness_designation_1' => $this->list_of_witness_designation_1,
            'list_of_witness_phone_number_1' => $this->list_of_witness_phone_number_1,
            'list_of_witness_name_2' => $this->list_of_witness_name_2,
            'list_of_witness_designation_2' => $this->list_of_witness_designation_2,
            'list_of_witness_phone_number_2' => $this->list_of_witness_phone_number_2,
            'comment_if_any' => $this->comment_if_any,
            'approved_by' => $this->approvedBy ? new UserResource($this->approvedBy) : null,
            'updated_by' => $this->updatedBy ? new UserResource($this->updatedBy) : null,
            'created_by' => $this->createdBy ? new UserResource($this->createdBy) : null,
            'approved_date' => $this->approved_date,
        ];
    }
}
