<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GantryCraneResource extends JsonResource
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
            'gantry_crane_des_1' => $this->gantry_crane_des_1,
            'gantry_crane_des_2' => $this->gantry_crane_des_2,
            'gantry_crane_des_3' => $this->gantry_crane_des_3,
            'gantry_crane_des_4' => $this->gantry_crane_des_4,
            'gantry_crane_des_5' => $this->gantry_crane_des_5,
            'gantry_crane_des_6' => $this->gantry_crane_des_6,
            'gantry_crane_des_7' => $this->gantry_crane_des_7,
            'gantry_crane_des_8' => $this->gantry_crane_des_8,
            'gantry_crane_des_9' => $this->gantry_crane_des_9,
            'gantry_crane_des_10' => $this->gantry_crane_des_10,
            'gantry_crane_des_11' => $this->gantry_crane_des_11,
            'gantry_crane_des_12' => $this->gantry_crane_des_12,
            'gantry_crane_des_13' => $this->gantry_crane_des_13,
            'gantry_crane_des_14' => $this->gantry_crane_des_14,
            'gantry_crane_des_15' => $this->gantry_crane_des_15,
            'is_gantry_crane_1' => $this->is_gantry_crane_1,
            'is_gantry_crane_2' => $this->is_gantry_crane_2,
            'is_gantry_crane_3' => $this->is_gantry_crane_3,
            'is_gantry_crane_4' => $this->is_gantry_crane_4,
            'is_gantry_crane_5' => $this->is_gantry_crane_5,
            'is_gantry_crane_6' => $this->is_gantry_crane_6,
            'is_gantry_crane_7' => $this->is_gantry_crane_7,
            'is_gantry_crane_8' => $this->is_gantry_crane_8,
            'is_gantry_crane_9' => $this->is_gantry_crane_9,
            'is_gantry_crane_10' => $this->is_gantry_crane_10,
            'is_gantry_crane_11' => $this->is_gantry_crane_11,
            'is_gantry_crane_12' => $this->is_gantry_crane_12,
            'is_gantry_crane_13' => $this->is_gantry_crane_13,
            'is_gantry_crane_14' => $this->is_gantry_crane_14,
            'is_gantry_crane_15' => $this->is_gantry_crane_15,
            'gantry_crane_remarks_1' => $this->gantry_crane_remarks_1,
            'gantry_crane_remarks_2' => $this->gantry_crane_remarks_2,
            'gantry_crane_remarks_3' => $this->gantry_crane_remarks_3,
            'gantry_crane_remarks_4' => $this->gantry_crane_remarks_4,
            'gantry_crane_remarks_5' => $this->gantry_crane_remarks_5,
            'gantry_crane_remarks_6' => $this->gantry_crane_remarks_6,
            'gantry_crane_remarks_7' => $this->gantry_crane_remarks_7,
            'gantry_crane_remarks_8' => $this->gantry_crane_remarks_8,
            'gantry_crane_remarks_9' => $this->gantry_crane_remarks_9,
            'gantry_crane_remarks_10' => $this->gantry_crane_remarks_10,
            'gantry_crane_remarks_11' => $this->gantry_crane_remarks_11,
            'gantry_crane_remarks_12' => $this->gantry_crane_remarks_12,
            'gantry_crane_remarks_13' => $this->gantry_crane_remarks_13,
            'gantry_crane_remarks_14' => $this->gantry_crane_remarks_14,
            'gantry_crane_remarks_15' => $this->gantry_crane_remarks_15,
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
