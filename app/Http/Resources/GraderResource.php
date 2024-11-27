<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GraderResource extends JsonResource
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
            'grader_des_1' => $this->grader_des_1,
            'grader_des_2' => $this->grader_des_2,
            'grader_des_3' => $this->grader_des_3,
            'grader_des_4' => $this->grader_des_4,
            'grader_des_5' => $this->grader_des_5,
            'grader_des_6' => $this->grader_des_6,
            'grader_des_7' => $this->grader_des_7,
            'grader_des_8' => $this->grader_des_8,
            'grader_des_9' => $this->grader_des_9,
            'grader_des_10' => $this->grader_des_10,
            'grader_des_11' => $this->grader_des_11,
            'grader_des_12' => $this->grader_des_12,
            'is_grader_1' => $this->is_grader_1,
            'is_grader_2' => $this->is_grader_2,
            'is_grader_3' => $this->is_grader_3,
            'is_grader_4' => $this->is_grader_4,
            'is_grader_5' => $this->is_grader_5,
            'is_grader_6' => $this->is_grader_6,
            'is_grader_7' => $this->is_grader_7,
            'is_grader_8' => $this->is_grader_8,
            'is_grader_9' => $this->is_grader_9,
            'is_grader_10' => $this->is_grader_10,
            'is_grader_11' => $this->is_grader_11,
            'is_grader_12' => $this->is_grader_12,
            'grader_remarks_1' => $this->grader_remarks_1,
            'grader_remarks_2' => $this->grader_remarks_2,
            'grader_remarks_3' => $this->grader_remarks_3,
            'grader_remarks_4' => $this->grader_remarks_4,
            'grader_remarks_5' => $this->grader_remarks_5,
            'grader_remarks_6' => $this->grader_remarks_6,
            'grader_remarks_7' => $this->grader_remarks_7,
            'grader_remarks_8' => $this->grader_remarks_8,
            'grader_remarks_9' => $this->grader_remarks_9,
            'grader_remarks_10' => $this->grader_remarks_10,
            'grader_remarks_11' => $this->grader_remarks_11,
            'grader_remarks_12' => $this->grader_remarks_12,
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
