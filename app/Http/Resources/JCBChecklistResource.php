<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JCBChecklistResource extends JsonResource
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
            'jcb_des_1' => $this->jcb_des_1,
            'jcb_des_2' => $this->jcb_des_2,
            'jcb_des_3' => $this->jcb_des_3,
            'jcb_des_4' => $this->jcb_des_4,
            'jcb_des_5' => $this->jcb_des_5,
            'jcb_des_6' => $this->jcb_des_6,
            'jcb_des_7' => $this->jcb_des_7,
            'jcb_des_8' => $this->jcb_des_8,
            'jcb_des_9' => $this->jcb_des_9,
            'jcb_des_10' => $this->jcb_des_10,
            'jcb_des_11' => $this->jcb_des_11,
            'jcb_des_12' => $this->jcb_des_12,
            'jcb_des_13' => $this->jcb_des_13,
            'jcb_des_14' => $this->jcb_des_14,
            'is_jcb_1' => $this->is_jcb_1,
            'is_jcb_2' => $this->is_jcb_2,
            'is_jcb_3' => $this->is_jcb_3,
            'is_jcb_4' => $this->is_jcb_4,
            'is_jcb_5' => $this->is_jcb_5,
            'is_jcb_6' => $this->is_jcb_6,
            'is_jcb_7' => $this->is_jcb_7,
            'is_jcb_8' => $this->is_jcb_8,
            'is_jcb_9' => $this->is_jcb_9,
            'is_jcb_10' => $this->is_jcb_10,
            'is_jcb_11' => $this->is_jcb_11,
            'is_jcb_12' => $this->is_jcb_12,
            'is_jcb_13' => $this->is_jcb_13,
            'is_jcb_14' => $this->is_jcb_14,
            'jcb_remarks_1' => $this->jcb_remarks_1,
            'jcb_remarks_2' => $this->jcb_remarks_2,
            'jcb_remarks_3' => $this->jcb_remarks_3,
            'jcb_remarks_4' => $this->jcb_remarks_4,
            'jcb_remarks_5' => $this->jcb_remarks_5,
            'jcb_remarks_6' => $this->jcb_remarks_6,
            'jcb_remarks_7' => $this->jcb_remarks_7,
            'jcb_remarks_8' => $this->jcb_remarks_8,
            'jcb_remarks_9' => $this->jcb_remarks_9,
            'jcb_remarks_10' => $this->jcb_remarks_10,
            'jcb_remarks_11' => $this->jcb_remarks_11,
            'jcb_remarks_12' => $this->jcb_remarks_12,
            'jcb_remarks_13' => $this->jcb_remarks_13,
            'jcb_remarks_14' => $this->jcb_remarks_14,
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
