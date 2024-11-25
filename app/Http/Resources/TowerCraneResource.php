<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TowerCraneResource extends JsonResource
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
            'project_name' => $this->project_name,
            'project_code' => $this->project_code,
            'checklist_no' => $this->checklist_no,
            'date' => $this->date,
            'make' => $this->make,
            'model' => $this->model,
            'isgec' => $this->isgec,
            'hired' => $this->hired,
            'contractor' => $this->contractor,
            'tower_crane_des_1' => $this->tower_crane_des_1,
            'tower_crane_des_2' => $this->tower_crane_des_2,
            'tower_crane_des_3' => $this->tower_crane_des_3,
            'tower_crane_des_4' => $this->tower_crane_des_4,
            'tower_crane_des_5' => $this->tower_crane_des_5,
            'tower_crane_des_6' => $this->tower_crane_des_6,
            'tower_crane_des_7' => $this->tower_crane_des_7,
            'tower_crane_des_8' => $this->tower_crane_des_8,
            'tower_crane_des_9' => $this->tower_crane_des_9,
            'tower_crane_des_10' => $this->tower_crane_des_10,
            'tower_crane_des_11' => $this->tower_crane_des_11,
            'tower_crane_des_12' => $this->tower_crane_des_12,
            'tower_crane_des_13' => $this->tower_crane_des_13,
            'tower_crane_des_14' => $this->tower_crane_des_14,
            'tower_crane_des_15' => $this->tower_crane_des_15,
            'tower_crane_des_16' => $this->tower_crane_des_16,
            'tower_crane_des_17' => $this->tower_crane_des_17,
            'tower_crane_des_18' => $this->tower_crane_des_18,
            'tower_crane_des_19' => $this->tower_crane_des_19,
            'is_tower_crane_1' => $this->is_tower_crane_1,
            'is_tower_crane_2' => $this->is_tower_crane_2,
            'is_tower_crane_3' => $this->is_tower_crane_3,
            'is_tower_crane_4' => $this->is_tower_crane_4,
            'is_tower_crane_5' => $this->is_tower_crane_5,
            'is_tower_crane_6' => $this->is_tower_crane_6,
            'is_tower_crane_7' => $this->is_tower_crane_7,
            'is_tower_crane_8' => $this->is_tower_crane_8,
            'is_tower_crane_9' => $this->is_tower_crane_9,
            'is_tower_crane_10' => $this->is_tower_crane_10,
            'is_tower_crane_11' => $this->is_tower_crane_11,
            'is_tower_crane_12' => $this->is_tower_crane_12,
            'is_tower_crane_13' => $this->is_tower_crane_13,
            'is_tower_crane_14' => $this->is_tower_crane_14,
            'is_tower_crane_15' => $this->is_tower_crane_15,
            'is_tower_crane_16' => $this->is_tower_crane_16,
            'is_tower_crane_17' => $this->is_tower_crane_17,
            'is_tower_crane_18' => $this->is_tower_crane_18,
            'is_tower_crane_19' => $this->is_tower_crane_19,
            'tower_crane_remarks_1' => $this->tower_crane_remarks_1,
            'tower_crane_remarks_2' => $this->tower_crane_remarks_2,
            'tower_crane_remarks_3' => $this->tower_crane_remarks_3,
            'tower_crane_remarks_4' => $this->tower_crane_remarks_4,
            'tower_crane_remarks_5' => $this->tower_crane_remarks_5,
            'tower_crane_remarks_6' => $this->tower_crane_remarks_6,
            'tower_crane_remarks_7' => $this->tower_crane_remarks_7,
            'tower_crane_remarks_8' => $this->tower_crane_remarks_8,
            'tower_crane_remarks_9' => $this->tower_crane_remarks_9,
            'tower_crane_remarks_10' => $this->tower_crane_remarks_10,
            'tower_crane_remarks_11' => $this->tower_crane_remarks_11,
            'tower_crane_remarks_12' => $this->tower_crane_remarks_12,
            'tower_crane_remarks_13' => $this->tower_crane_remarks_13,
            'tower_crane_remarks_14' => $this->tower_crane_remarks_14,
            'tower_crane_remarks_15' => $this->tower_crane_remarks_15,
            'tower_crane_remarks_16' => $this->tower_crane_remarks_16,
            'tower_crane_remarks_17' => $this->tower_crane_remarks_17,
            'tower_crane_remarks_18' => $this->tower_crane_remarks_18,
            'tower_crane_remarks_19' => $this->tower_crane_remarks_19,
            'fit' => $this->fit,
            'partially_fit' => $this->partially_fit,
            'unfit' => $this->unfit,
            'checked_by' => $this->checked_by,
            'reviewed_by' => $this->reviewed_by,
            'checked_by_date' => $this->checked_by_date,
            'reviewed_by_date' => $this->reviewed_by_date,
            'checked_by_signature' => $this->checked_by_signature,
            'reviewed_by_signature' => $this->reviewed_by_signature,
            'approved_by' => $this->approved_by,
            'updated_by' => $this->updated_by,
            'created_by' => $this->created_by,
            'approved_date' => $this->approved_date,
        ];
    }
}
