<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SafetyObservation extends JsonResource
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
        'auditor' => $this->auditor,
        'plant_name' => $this->plant_name,
        'location' => $this->location,
        'audit_date' => $this->audit_date,
        'category' => $this->category,
        'problem_description' => $this->problem_description,
        'problematic_progressive_images' => $this->problematic_progressive_images,
        'root_cause' => $this->root_cause,
        'resp_department' => $this->resp_department,
        'owner_department' => $this->owner_department,
        'improvement_actions' => $this->improvement_actions,
        'due_date' => $this->due_date,
        'status' => (bool)$this->status,
        'priority_type' => $this->priority_type,
        'remarks' => $this->remarks,
        'corrective_image' => $this->corrective_image,
        'importance_level' => $this->importance_level,
        'work_accomplished_by' => $this->work_accomplished_by,
        ];
    }
}
