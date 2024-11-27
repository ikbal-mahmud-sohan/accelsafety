<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FireExtinguisherResource extends JsonResource
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
            'fire_extinguisher_des_1' => $this->fire_extinguisher_des_1,
            'fire_extinguisher_des_2' => $this->fire_extinguisher_des_2,
            'fire_extinguisher_des_3' => $this->fire_extinguisher_des_3,
            'fire_extinguisher_des_4' => $this->fire_extinguisher_des_4,
            'fire_extinguisher_des_5' => $this->fire_extinguisher_des_5,
            'fire_extinguisher_des_6' => $this->fire_extinguisher_des_6,
            'fire_extinguisher_des_7' => $this->fire_extinguisher_des_7,
            'fire_extinguisher_des_8' => $this->fire_extinguisher_des_8,
            'is_fire_extinguisher_1' => $this->is_fire_extinguisher_1,
            'is_fire_extinguisher_2' => $this->is_fire_extinguisher_2,
            'is_fire_extinguisher_3' => $this->is_fire_extinguisher_3,
            'is_fire_extinguisher_4' => $this->is_fire_extinguisher_4,
            'is_fire_extinguisher_5' => $this->is_fire_extinguisher_5,
            'is_fire_extinguisher_6' => $this->is_fire_extinguisher_6,
            'is_fire_extinguisher_7' => $this->is_fire_extinguisher_7,
            'is_fire_extinguisher_8' => $this->is_fire_extinguisher_8,
            'fire_extinguisher_remarks_1' => $this->fire_extinguisher_remarks_1,
            'fire_extinguisher_remarks_2' => $this->fire_extinguisher_remarks_2,
            'fire_extinguisher_remarks_3' => $this->fire_extinguisher_remarks_3,
            'fire_extinguisher_remarks_4' => $this->fire_extinguisher_remarks_4,
            'fire_extinguisher_remarks_5' => $this->fire_extinguisher_remarks_5,
            'fire_extinguisher_remarks_6' => $this->fire_extinguisher_remarks_6,
            'fire_extinguisher_remarks_7' => $this->fire_extinguisher_remarks_7,
            'fire_extinguisher_remarks_8' => $this->fire_extinguisher_remarks_8,
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
