<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseLiftingLooseGearsResource extends JsonResource
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
            'asset_nnumber' => $this->asset_nnumber,
            'loose_gears_name' => $this->loose_gears_name,
            'loose_gears_specification' => $this->loose_gears_specification,
            'capacity' => $this->capacity,
            'tested_on' => $this->tested_on,
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
