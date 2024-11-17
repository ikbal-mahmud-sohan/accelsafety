<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HsePermitWorkResource extends JsonResource
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
            'created_change_history' => $this->created_change_history,
            'approved_change_history' => $this->approved_change_history,
            'updated_change_history' => $this->updated_change_history,
            'approved_date' => $this->approved_date,
            'approved_by' => $this->approvedBy ? new UserResource($this->approvedBy) : null,
            'updated_by' => $this->updatedBy ? new UserResource($this->updatedBy) : null,
            'created_by' => $this->createdBy ? new UserResource($this->createdBy) : null,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
