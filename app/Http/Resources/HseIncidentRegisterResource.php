<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseIncidentRegisterResource extends JsonResource
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
            'types_of_incident' => $this->types_of_incident,
            'department' => $this->department,
            'involved_person' => $this->involved_person,
            'description_of_incident' => $this->description_of_incident,
            'location' => $this->location,
            'property_damaged' => $this->property_damaged,
            'operation_stopped' => $this->operation_stopped,
            'immediate_cause' => $this->immediate_cause,
            'immediate_action_taken' => $this->immediate_action_taken,
            'recommendations_inv_report' => $this->recommendations_inv_report,
            'action_party_with_position' => $this->action_party_with_position,
            'time_frame' => $this->time_frame,
            'action_status' => $this->action_status,
            'remarks' => $this->remarks,
        ];
    }
}
