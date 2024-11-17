<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EarthCompactorResource extends JsonResource
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
            'compactor_des_1' => $this->compactor_des_1,
            'compactor_des_2' => $this->compactor_des_2,
            'compactor_des_3' => $this->compactor_des_3,
            'compactor_des_4' => $this->compactor_des_4,
            'compactor_des_5' => $this->compactor_des_5,
            'compactor_des_6' => $this->compactor_des_6,
            'compactor_des_7' => $this->compactor_des_7,
            'compactor_des_8' => $this->compactor_des_8,
            'compactor_des_9' => $this->compactor_des_9,
            'compactor_des_10' => $this->compactor_des_10,
            'compactor_des_11' => $this->compactor_des_11,
            'is_compactor_1' => $this->is_compactor_1,
            'is_compactor_2' => $this->is_compactor_2,
            'is_compactor_3' => $this->is_compactor_3,
            'is_compactor_4' => $this->is_compactor_4,
            'is_compactor_5' => $this->is_compactor_5,
            'is_compactor_6' => $this->is_compactor_6,
            'is_compactor_7' => $this->is_compactor_7,
            'is_compactor_8' => $this->is_compactor_8,
            'is_compactor_9' => $this->is_compactor_9,
            'is_compactor_10' => $this->is_compactor_10,
            'is_compactor_11' => $this->is_compactor_11,
            'compactor_remarks_1' => $this->compactor_remarks_1,
            'compactor_remarks_2' => $this->compactor_remarks_2,
            'compactor_remarks_3' => $this->compactor_remarks_3,
            'compactor_remarks_4' => $this->compactor_remarks_4,
            'compactor_remarks_5' => $this->compactor_remarks_5,
            'compactor_remarks_6' => $this->compactor_remarks_6,
            'compactor_remarks_7' => $this->compactor_remarks_7,
            'compactor_remarks_8' => $this->compactor_remarks_8,
            'compactor_remarks_9' => $this->compactor_remarks_9,
            'compactor_remarks_10' => $this->compactor_remarks_10,
            'compactor_remarks_11' => $this->compactor_remarks_11,
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
