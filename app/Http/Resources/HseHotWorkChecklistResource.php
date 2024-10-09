<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseHotWorkChecklistResource extends JsonResource
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
            'location_of_work' => $this->location_of_work,
            'equipment_number' => $this->equipment_number,
            'purpose_of_work' => $this->purpose_of_work,
            'no_person_work' => $this->no_person_work,
            'name_fire_person' => $this->name_fire_person,
            'supervisor_name' => $this->supervisor_name,
            'supervisor_signature' => $this->supervisor_signature,
            'hw_fire_extinguishers' => $this->hw_fire_extinguishers,
            'hw_equipment' => $this->hw_equipment,
            'hw_liquids_dust' => $this->hw_liquids_dust,
            'hw_atmosphere' => $this->hw_atmosphere,
            'hw_surface_area' => $this->hw_surface_area,
            'hw_floors' => $this->hw_floors,
            'hw_surface_areas' => $this->hw_surface_areas,
            'hw_access' => $this->hw_access,
            'hw_uv' => $this->hw_uv,
            'hw_enclosed_equipment' => $this->hw_enclosed_equipment,
            'hw_containers' => $this->hw_containers,
            'hw_coffee_lunch' => $this->hw_coffee_lunch,
            'hw_extinguishing_devices' => $this->hw_extinguishing_devices,
            'hw_raising_alarm' => $this->hw_raising_alarm,
            'hw_adjoining_areas' => $this->hw_adjoining_areas,
            'hw_monitored' => $this->hw_monitored,
            'approved_by' => $this->approvedBy ? new UserResource($this->approvedBy) : null,
            'updated_by' => $this->updatedBy ? new UserResource($this->updatedBy) : null,
            'created_by' => $this->createdBy ? new UserResource($this->createdBy) : null,
            'approved_date' => $this->approved_date,
        ];
    }
}
