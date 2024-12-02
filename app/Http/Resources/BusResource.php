<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BusResource extends JsonResource
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
            'buse_des_1' => $this->buse_des_1,
            'buse_des_2' => $this->buse_des_2,
            'buse_des_3' => $this->buse_des_3,
            'buse_des_4' => $this->buse_des_4,
            'buse_des_5' => $this->buse_des_5,
            'buse_des_6' => $this->buse_des_6,
            'buse_des_7' => $this->buse_des_7,
            'buse_des_8' => $this->buse_des_8,
            'buse_des_9' => $this->buse_des_9,
            'buse_des_10' => $this->buse_des_10,
            'buse_des_11' => $this->buse_des_11,
            'buse_des_12' => $this->buse_des_12,
            'buse_des_13' => $this->buse_des_13,
            'buse_des_14' => $this->buse_des_14,
            'buse_des_15' => $this->buse_des_15,
            'is_buse_1' => $this->is_buse_1,
            'is_buse_2' => $this->is_buse_2,
            'is_buse_3' => $this->is_buse_3,
            'is_buse_4' => $this->is_buse_4,
            'is_buse_5' => $this->is_buse_5,
            'is_buse_6' => $this->is_buse_6,
            'is_buse_7' => $this->is_buse_7,
            'is_buse_8' => $this->is_buse_8,
            'is_buse_9' => $this->is_buse_9,
            'is_buse_10' => $this->is_buse_10,
            'is_buse_11' => $this->is_buse_11,
            'is_buse_12' => $this->is_buse_12,
            'is_buse_13' => $this->is_buse_13,
            'is_buse_14' => $this->is_buse_14,
            'is_buse_15' => $this->is_buse_15,
            'buse_remarks_1' => $this->buse_remarks_1,
            'buse_remarks_2' => $this->buse_remarks_2,
            'buse_remarks_3' => $this->buse_remarks_3,
            'buse_remarks_4' => $this->buse_remarks_4,
            'buse_remarks_5' => $this->buse_remarks_5,
            'buse_remarks_6' => $this->buse_remarks_6,
            'buse_remarks_7' => $this->buse_remarks_7,
            'buse_remarks_8' => $this->buse_remarks_8,
            'buse_remarks_9' => $this->buse_remarks_9,
            'buse_remarks_10' => $this->buse_remarks_10,
            'buse_remarks_11' => $this->buse_remarks_11,
            'buse_remarks_12' => $this->buse_remarks_12,
            'buse_remarks_13' => $this->buse_remarks_13,
            'buse_remarks_14' => $this->buse_remarks_14,
            'buse_remarks_15' => $this->buse_remarks_15,
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
