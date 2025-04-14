<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HSESafetyCommitteeSOPDocResource extends JsonResource
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
            'descriptions' => $this->descriptions,
            'approved_by' => $this->approvedBy ? new UserResource($this->approvedBy) : null,
            'updated_by' => $this->updatedBy ? new UserResource($this->updatedBy) : null,
            'created_by' => $this->createdBy ? new UserResource($this->createdBy) : null,
        ];
    }
}
