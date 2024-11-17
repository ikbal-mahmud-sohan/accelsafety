<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExcavatorChecklistResource extends JsonResource
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
            'excavator_des_1' => $this->excavator_des_1,
            'excavator_des_2' => $this->excavator_des_2,
            'excavator_des_3' => $this->excavator_des_3,
            'excavator_des_4' => $this->excavator_des_4,
            'excavator_des_5' => $this->excavator_des_5,
            'excavator_des_6' => $this->excavator_des_6,
            'excavator_des_7' => $this->excavator_des_7,
            'excavator_des_8' => $this->excavator_des_8,
            'excavator_des_9' => $this->excavator_des_9,
            'excavator_des_10' => $this->excavator_des_10,
            'excavator_des_11' => $this->excavator_des_11,
            'excavator_des_12' => $this->excavator_des_12,
            'excavator_des_13' => $this->excavator_des_13,
            'excavator_des_14' => $this->excavator_des_14,
            'is_excavator_1' => $this->is_excavator_1,
            'is_excavator_2' => $this->is_excavator_2,
            'is_excavator_3' => $this->is_excavator_3,
            'is_excavator_4' => $this->is_excavator_4,
            'is_excavator_5' => $this->is_excavator_5,
            'is_excavator_6' => $this->is_excavator_6,
            'is_excavator_7' => $this->is_excavator_7,
            'is_excavator_8' => $this->is_excavator_8,
            'is_excavator_9' => $this->is_excavator_9,
            'is_excavator_10' => $this->is_excavator_10,
            'is_excavator_11' => $this->is_excavator_11,
            'is_excavator_12' => $this->is_excavator_12,
            'is_excavator_13' => $this->is_excavator_13,
            'is_excavator_14' => $this->is_excavator_14,
            'excavator_remarks_1' => $this->excavator_remarks_1,
            'excavator_remarks_2' => $this->excavator_remarks_2,
            'excavator_remarks_3' => $this->excavator_remarks_3,
            'excavator_remarks_4' => $this->excavator_remarks_4,
            'excavator_remarks_5' => $this->excavator_remarks_5,
            'excavator_remarks_6' => $this->excavator_remarks_6,
            'excavator_remarks_7' => $this->excavator_remarks_7,
            'excavator_remarks_8' => $this->excavator_remarks_8,
            'excavator_remarks_9' => $this->excavator_remarks_9,
            'excavator_remarks_10' => $this->excavator_remarks_10,
            'excavator_remarks_11' => $this->excavator_remarks_11,
            'excavator_remarks_12' => $this->excavator_remarks_12,
            'excavator_remarks_13' => $this->excavator_remarks_13,
            'excavator_remarks_14' => $this->excavator_remarks_14,
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
