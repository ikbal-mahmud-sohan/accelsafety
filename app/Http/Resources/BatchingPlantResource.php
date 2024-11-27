<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BatchingPlantResource extends JsonResource
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
            'batching_plant_des_1' => $this->batching_plant_des_1,
            'batching_plant_des_2' => $this->batching_plant_des_2,
            'batching_plant_des_3' => $this->batching_plant_des_3,
            'batching_plant_des_4' => $this->batching_plant_des_4,
            'batching_plant_des_5' => $this->batching_plant_des_5,
            'batching_plant_des_6' => $this->batching_plant_des_6,
            'batching_plant_des_7' => $this->batching_plant_des_7,
            'batching_plant_des_8' => $this->batching_plant_des_8,
            'batching_plant_des_9' => $this->batching_plant_des_9,
            'batching_plant_des_10' => $this->batching_plant_des_10,
            'batching_plant_des_11' => $this->batching_plant_des_11,
            'batching_plant_des_12' => $this->batching_plant_des_12,
            'batching_plant_des_13' => $this->batching_plant_des_13,
            'batching_plant_des_14' => $this->batching_plant_des_14,
            'batching_plant_des_15' => $this->batching_plant_des_15,
            'batching_plant_des_16' => $this->batching_plant_des_16,
            'is_batching_plant_1' => $this->is_batching_plant_1,
            'is_batching_plant_2' => $this->is_batching_plant_2,
            'is_batching_plant_3' => $this->is_batching_plant_3,
            'is_batching_plant_4' => $this->is_batching_plant_4,
            'is_batching_plant_5' => $this->is_batching_plant_5,
            'is_batching_plant_6' => $this->is_batching_plant_6,
            'is_batching_plant_7' => $this->is_batching_plant_7,
            'is_batching_plant_8' => $this->is_batching_plant_8,
            'is_batching_plant_9' => $this->is_batching_plant_9,
            'is_batching_plant_10' => $this->is_batching_plant_10,
            'is_batching_plant_11' => $this->is_batching_plant_11,
            'is_batching_plant_12' => $this->is_batching_plant_12,
            'is_batching_plant_13' => $this->is_batching_plant_13,
            'is_batching_plant_14' => $this->is_batching_plant_14,
            'is_batching_plant_15' => $this->is_batching_plant_15,
            'is_batching_plant_16' => $this->is_batching_plant_16,
            'batching_plant_remarks_1' => $this->batching_plant_remarks_1,
            'batching_plant_remarks_2' => $this->batching_plant_remarks_2,
            'batching_plant_remarks_3' => $this->batching_plant_remarks_3,
            'batching_plant_remarks_4' => $this->batching_plant_remarks_4,
            'batching_plant_remarks_5' => $this->batching_plant_remarks_5,
            'batching_plant_remarks_6' => $this->batching_plant_remarks_6,
            'batching_plant_remarks_7' => $this->batching_plant_remarks_7,
            'batching_plant_remarks_8' => $this->batching_plant_remarks_8,
            'batching_plant_remarks_9' => $this->batching_plant_remarks_9,
            'batching_plant_remarks_10' => $this->batching_plant_remarks_10,
            'batching_plant_remarks_11' => $this->batching_plant_remarks_11,
            'batching_plant_remarks_12' => $this->batching_plant_remarks_12,
            'batching_plant_remarks_13' => $this->batching_plant_remarks_13,
            'batching_plant_remarks_14' => $this->batching_plant_remarks_14,
            'batching_plant_remarks_15' => $this->batching_plant_remarks_15,
            'batching_plant_remarks_16' => $this->batching_plant_remarks_16,
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
