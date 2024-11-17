<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseAccidentNotificationResource extends JsonResource
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
            'plant_name' => $this->plant_name,
            'date_of_accident' => $this->date_of_accident,
            'shift' => $this->shift,
            'location_of_accident' => $this->location_of_accident,
            'pn_time' => $this->pn_time,
            'no_of_people_injured' => $this->no_of_people_injured,
            'nature_of_accident' => $this->nature_of_accident,
            'injured_party_name' => $this->injured_party_name,
            'injured_party_address' => $this->injured_party_address,
            'injured_party_job_title' => $this->injured_party_job_title,
            'injured_party_mobile_no' => $this->injured_party_mobile_no,
            'injured_party_victim_type' => $this->injured_party_victim_type,
            'injured_party_effected_body' => $this->injured_party_effected_body,
            'injured_party_department' => $this->injured_party_department,
            'injured_party_age' => $this->injured_party_age,
            'injured_party_type_Injury' => $this->injured_party_type_Injury,
            'brief_description_of_incident' => $this->brief_description_of_incident,
            'action_first_Aid_hospitalization' => $this->action_first_Aid_hospitalization,
            'name_of_shift_in_charge' => $this->name_of_shift_in_charge,
            'injured_party_designation' => $this->injured_party_designation,
            'injured_party_mobile' => $this->injured_party_mobile,
            'approved_by' => $this->approvedBy ? new UserResource($this->approvedBy) : null,
            'updated_by' => $this->updatedBy ? new UserResource($this->updatedBy) : null,
            'created_by' => $this->createdBy ? new UserResource($this->createdBy) : null,
            'approved_date' => $this->approved_date,
        ];
    }
}
