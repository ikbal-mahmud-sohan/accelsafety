<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EotCraneResource extends JsonResource
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
            'eot_crane_des_1' => $this->eot_crane_des_1,
            'eot_crane_des_2' => $this->eot_crane_des_2,
            'eot_crane_des_3' => $this->eot_crane_des_3,
            'eot_crane_des_4' => $this->eot_crane_des_4,
            'eot_crane_des_5' => $this->eot_crane_des_5,
            'eot_crane_des_6' => $this->eot_crane_des_6,
            'eot_crane_des_7' => $this->eot_crane_des_7,
            'eot_crane_des_8' => $this->eot_crane_des_8,
            'eot_crane_des_9' => $this->eot_crane_des_9,
            'eot_crane_des_10' => $this->eot_crane_des_10,
            'is_eot_crane_1' => $this->is_eot_crane_1,
            'is_eot_crane_2' => $this->is_eot_crane_2,
            'is_eot_crane_3' => $this->is_eot_crane_3,
            'is_eot_crane_4' => $this->is_eot_crane_4,
            'is_eot_crane_5' => $this->is_eot_crane_5,
            'is_eot_crane_6' => $this->is_eot_crane_6,
            'is_eot_crane_7' => $this->is_eot_crane_7,
            'is_eot_crane_8' => $this->is_eot_crane_8,
            'is_eot_crane_9' => $this->is_eot_crane_9,
            'is_eot_crane_10' => $this->is_eot_crane_10,
            'eot_crane_remarks_1' => $this->eot_crane_remarks_1,
            'eot_crane_remarks_2' => $this->eot_crane_remarks_2,
            'eot_crane_remarks_3' => $this->eot_crane_remarks_3,
            'eot_crane_remarks_4' => $this->eot_crane_remarks_4,
            'eot_crane_remarks_5' => $this->eot_crane_remarks_5,
            'eot_crane_remarks_6' => $this->eot_crane_remarks_6,
            'eot_crane_remarks_7' => $this->eot_crane_remarks_7,
            'eot_crane_remarks_8' => $this->eot_crane_remarks_8,
            'eot_crane_remarks_9' => $this->eot_crane_remarks_9,
            'eot_crane_remarks_10' => $this->eot_crane_remarks_10,
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
