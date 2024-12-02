<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WaterTankerResource extends JsonResource
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
            'water_tanker_des_1' => $this->water_tanker_des_1,
            'water_tanker_des_2' => $this->water_tanker_des_2,
            'water_tanker_des_3' => $this->water_tanker_des_3,
            'water_tanker_des_4' => $this->water_tanker_des_4,
            'water_tanker_des_5' => $this->water_tanker_des_5,
            'water_tanker_des_6' => $this->water_tanker_des_6,
            'water_tanker_des_7' => $this->water_tanker_des_7,
            'water_tanker_des_8' => $this->water_tanker_des_8,
            'water_tanker_des_9' => $this->water_tanker_des_9,
            'water_tanker_des_10' => $this->water_tanker_des_10,
            'water_tanker_des_11' => $this->water_tanker_des_11,
            'water_tanker_des_12' => $this->water_tanker_des_12,
            'water_tanker_des_13' => $this->water_tanker_des_13,
            'water_tanker_des_14' => $this->water_tanker_des_14,
            'is_water_tanker_1' => $this->is_water_tanker_1,
            'is_water_tanker_2' => $this->is_water_tanker_2,
            'is_water_tanker_3' => $this->is_water_tanker_3,
            'is_water_tanker_4' => $this->is_water_tanker_4,
            'is_water_tanker_5' => $this->is_water_tanker_5,
            'is_water_tanker_6' => $this->is_water_tanker_6,
            'is_water_tanker_7' => $this->is_water_tanker_7,
            'is_water_tanker_8' => $this->is_water_tanker_8,
            'is_water_tanker_9' => $this->is_water_tanker_9,
            'is_water_tanker_10' => $this->is_water_tanker_10,
            'is_water_tanker_11' => $this->is_water_tanker_11,
            'is_water_tanker_12' => $this->is_water_tanker_12,
            'is_water_tanker_13' => $this->is_water_tanker_13,
            'is_water_tanker_14' => $this->is_water_tanker_14,
            'water_tanker_remarks_1' => $this->water_tanker_remarks_1,
            'water_tanker_remarks_2' => $this->water_tanker_remarks_2,
            'water_tanker_remarks_3' => $this->water_tanker_remarks_3,
            'water_tanker_remarks_4' => $this->water_tanker_remarks_4,
            'water_tanker_remarks_5' => $this->water_tanker_remarks_5,
            'water_tanker_remarks_6' => $this->water_tanker_remarks_6,
            'water_tanker_remarks_7' => $this->water_tanker_remarks_7,
            'water_tanker_remarks_8' => $this->water_tanker_remarks_8,
            'water_tanker_remarks_9' => $this->water_tanker_remarks_9,
            'water_tanker_remarks_10' => $this->water_tanker_remarks_10,
            'water_tanker_remarks_11' => $this->water_tanker_remarks_11,
            'water_tanker_remarks_12' => $this->water_tanker_remarks_12,
            'water_tanker_remarks_13' => $this->water_tanker_remarks_13,
            'water_tanker_remarks_14' => $this->water_tanker_remarks_14,
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
