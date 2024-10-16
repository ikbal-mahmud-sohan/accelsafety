<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseAccidentRegisterResource extends JsonResource
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
            'types_of_accident' => $this->types_of_accident,
            'department' => $this->department,
            'victims_name_with_position' => $this->victims_name_with_position,
            'type_of_employee' => $this->type_of_employee,
            'description_of_accident' => $this->description_of_accident,
            'location' => $this->location,
            'effected_body_part' => $this->effected_body_part,
            'type_of_injury' => $this->type_of_injury,
            'immediate_cause' => $this->immediate_cause,
            'immediate_action_taken' => $this->immediate_action_taken,
            'investigation_report' => $this->investigation_report,
            'action_party_with_position' => $this->action_party_with_position,
            'time_frame' => $this->time_frame,
            'action_status' => $this->action_status,
            'remarks' => $this->remarks,
        ];
    }
}
