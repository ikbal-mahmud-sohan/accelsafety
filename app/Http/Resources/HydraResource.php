<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HydraResource extends JsonResource
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
            'hydra_des_1' => $this->hydra_des_1,
            'hydra_des_2' => $this->hydra_des_2,
            'hydra_des_3' => $this->hydra_des_3,
            'hydra_des_4' => $this->hydra_des_4,
            'hydra_des_5' => $this->hydra_des_5,
            'hydra_des_6' => $this->hydra_des_6,
            'hydra_des_7' => $this->hydra_des_7,
            'hydra_des_8' => $this->hydra_des_8,
            'hydra_des_9' => $this->hydra_des_9,
            'hydra_des_10' => $this->hydra_des_10,
            'hydra_des_11' => $this->hydra_des_11,
            'hydra_des_12' => $this->hydra_des_12,
            'hydra_des_13' => $this->hydra_des_13,
            'hydra_des_14' => $this->hydra_des_14,
            'hydra_des_15' => $this->hydra_des_15,
            'hydra_des_16' => $this->hydra_des_16,
            'is_hydra_1' => $this->is_hydra_1,
            'is_hydra_2' => $this->is_hydra_2,
            'is_hydra_3' => $this->is_hydra_3,
            'is_hydra_4' => $this->is_hydra_4,
            'is_hydra_5' => $this->is_hydra_5,
            'is_hydra_6' => $this->is_hydra_6,
            'is_hydra_7' => $this->is_hydra_7,
            'is_hydra_8' => $this->is_hydra_8,
            'is_hydra_9' => $this->is_hydra_9,
            'is_hydra_10' => $this->is_hydra_10,
            'is_hydra_11' => $this->is_hydra_11,
            'is_hydra_12' => $this->is_hydra_12,
            'is_hydra_13' => $this->is_hydra_13,
            'is_hydra_14' => $this->is_hydra_14,
            'is_hydra_15' => $this->is_hydra_15,
            'is_hydra_16' => $this->is_hydra_16,
            'hydra_remarks_1' => $this->hydra_remarks_1,
            'hydra_remarks_2' => $this->hydra_remarks_2,
            'hydra_remarks_3' => $this->hydra_remarks_3,
            'hydra_remarks_4' => $this->hydra_remarks_4,
            'hydra_remarks_5' => $this->hydra_remarks_5,
            'hydra_remarks_6' => $this->hydra_remarks_6,
            'hydra_remarks_7' => $this->hydra_remarks_7,
            'hydra_remarks_8' => $this->hydra_remarks_8,
            'hydra_remarks_9' => $this->hydra_remarks_9,
            'hydra_remarks_10' => $this->hydra_remarks_10,
            'hydra_remarks_11' => $this->hydra_remarks_11,
            'hydra_remarks_12' => $this->hydra_remarks_12,
            'hydra_remarks_13' => $this->hydra_remarks_13,
            'hydra_remarks_14' => $this->hydra_remarks_14,
            'hydra_remarks_15' => $this->hydra_remarks_15,
            'hydra_remarks_16' => $this->hydra_remarks_16,
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
