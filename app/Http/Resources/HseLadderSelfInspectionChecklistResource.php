<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseLadderSelfInspectionChecklistResource extends JsonResource
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
            'name_of_the_site' => $this->name_of_the_site,
            'date' => $this->date,
            'person_inspected' => $this->person_inspected,
            'position' => $this->position,
            'approved_by' => $this->approvedBy ? new UserResource($this->approvedBy) : null,
            'updated_by' => $this->updatedBy ? new UserResource($this->updatedBy) : null,
            'created_by' => $this->createdBy ? new UserResource($this->createdBy) : null,
            'approved_date' => $this->approved_date,
            'hse_ladder_des_1' => $this->hse_ladder_des_1,
            'is_hse_ladder_des_1' => $this->is_hse_ladder_des_1,
            'hse_ladder_des_remarks_1' => $this->hse_ladder_des_remarks_1,
            'hse_ladder_des_2' => $this->hse_ladder_des_2,
            'is_hse_ladder_des_2' => $this->is_hse_ladder_des_2,
            'hse_ladder_des_remarks_2' => $this->hse_ladder_des_remarks_2,
            'hse_ladder_des_3' => $this->hse_ladder_des_3,
            'is_hse_ladder_des_3' => $this->is_hse_ladder_des_3,
            'hse_ladder_des_remarks_3' => $this->hse_ladder_des_remarks_3,
            'hse_ladder_des_4' => $this->hse_ladder_des_4,
            'is_hse_ladder_des_4' => $this->is_hse_ladder_des_4,
            'hse_ladder_des_remarks_4' => $this->hse_ladder_des_remarks_4,
            'hse_ladder_des_5' => $this->hse_ladder_des_5,
            'is_hse_ladder_des_5' => $this->is_hse_ladder_des_5,
            'hse_ladder_des_remarks_5' => $this->hse_ladder_des_remarks_5,
            'hse_ladder_des_6' => $this->hse_ladder_des_6,
            'is_hse_ladder_des_6' => $this->is_hse_ladder_des_6,
            'hse_ladder_des_remarks_6' => $this->hse_ladder_des_remarks_6,
            'hse_ladder_des_7' => $this->hse_ladder_des_7,
            'is_hse_ladder_des_7' => $this->is_hse_ladder_des_7,
            'hse_ladder_des_remarks_7' => $this->hse_ladder_des_remarks_7,
            'hse_ladder_des_8' => $this->hse_ladder_des_8,
            'is_hse_ladder_des_8' => $this->is_hse_ladder_des_8,
            'hse_ladder_des_remarks_8' => $this->hse_ladder_des_remarks_8,
            'hse_ladder_des_9' => $this->hse_ladder_des_9,
            'is_hse_ladder_des_9' => $this->is_hse_ladder_des_9,
            'hse_ladder_des_remarks_9' => $this->hse_ladder_des_remarks_9,
            'hse_ladder_des_10' => $this->hse_ladder_des_10,
            'is_hse_ladder_des_10' => $this->is_hse_ladder_des_10,
            'hse_ladder_des_remarks_10' => $this->hse_ladder_des_remarks_10,
            'hse_ladder_des_11' => $this->hse_ladder_des_11,
            'is_hse_ladder_des_11' => $this->is_hse_ladder_des_11,
            'hse_ladder_des_remarks_11' => $this->hse_ladder_des_remarks_11,
            'hse_ladder_des_12' => $this->hse_ladder_des_12,
            'is_hse_ladder_des_12' => $this->is_hse_ladder_des_12,
            'hse_ladder_des_remarks_12' => $this->hse_ladder_des_remarks_12,
            'hse_ladder_des_13' => $this->hse_ladder_des_13,
            'is_hse_ladder_des_13' => $this->is_hse_ladder_des_13,
            'hse_ladder_des_remarks_13' => $this->hse_ladder_des_remarks_13,
            'hse_ladder_des_14' => $this->hse_ladder_des_14,
            'is_hse_ladder_des_14' => $this->is_hse_ladder_des_14,
            'hse_ladder_des_remarks_14' => $this->hse_ladder_des_remarks_14,
            'hse_ladder_des_15' => $this->hse_ladder_des_15,
            'is_hse_ladder_des_15' => $this->is_hse_ladder_des_15,
            'hse_ladder_des_remarks_15' => $this->hse_ladder_des_remarks_15,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
