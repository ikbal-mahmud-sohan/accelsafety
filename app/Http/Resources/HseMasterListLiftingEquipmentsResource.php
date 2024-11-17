<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseMasterListLiftingEquipmentsResource extends JsonResource
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
            'location' => $this->location,
            'name_of_equipment' => $this->name_of_equipment,
            'specification' => $this->specification,
            'capacity_ton' => $this->capacity_ton,
            'safe_working_load' => $this->safe_working_load,
            'last_inspection_done_on' => $this->last_inspection_done_on,
            'last_load_done_on' => $this->last_load_done_on,
            'agency' => $this->agency,
            'status' => $this->status,
            'remarks' => $this->remarks,
            'approved_by' => $this->approvedBy ? new UserResource($this->approvedBy) : null,
            'updated_by' => $this->updatedBy ? new UserResource($this->updatedBy) : null,
            'created_by' => $this->createdBy ? new UserResource($this->createdBy) : null,
            'approved_date' => $this->approved_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
