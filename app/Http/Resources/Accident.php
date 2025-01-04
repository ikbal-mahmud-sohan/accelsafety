<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Accident extends JsonResource
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
            'date' => $this->date,
            'name' => $this->name,
            'designation' => $this->designation,
            'supervisor' => $this->supervisor,
            'department' => $this->department,
            'type_of_accident' => $this->type_of_accident,
            'precise_location' => $this->precise_location,
            'injury_type' => $this->injury_type,
            'affected_body_parts' => $this->affected_body_parts,
            'property_damaged' => $this->property_damaged,
            'root_cause' => $this->root_cause,
            'action' => $this->action,
            'days_lost' => $this->days_lost,
            'remarks' => $this->remarks,
            'type_of_victim_employee' => $this->type_of_victim_employee,
            'responsible_name' => $this->responsible_name,
            'deadline' => $this->deadline,
            'status' => $this->status,
            'verified_image' => $this->verified_image,
            'site_name' => $this->site_name,
            'immidiate_cause' => $this->immidiate_cause,
            'incident_location' => $this->incident_location,
            'investigation_lead' => $this->investigation_lead,
            'attachment' => $this->attachment,
            'is_required' => $this->is_required,
        ];
    }
}
