<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LiftingToolsTacklesResource extends JsonResource
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
            'lifting_tools_des_1' => $this->lifting_tools_des_1,
            'lifting_tools_des_2' => $this->lifting_tools_des_2,
            'lifting_tools_des_3' => $this->lifting_tools_des_3,
            'lifting_tools_des_4' => $this->lifting_tools_des_4,
            'lifting_tools_des_5' => $this->lifting_tools_des_5,
            'lifting_tools_des_6' => $this->lifting_tools_des_6,
            'lifting_tools_des_7' => $this->lifting_tools_des_7,
            'lifting_tools_des_8' => $this->lifting_tools_des_8,
            'lifting_tools_des_9' => $this->lifting_tools_des_9,
            'is_lifting_tools_1' => $this->is_lifting_tools_1,
            'is_lifting_tools_2' => $this->is_lifting_tools_2,
            'is_lifting_tools_3' => $this->is_lifting_tools_3,
            'is_lifting_tools_4' => $this->is_lifting_tools_4,
            'is_lifting_tools_5' => $this->is_lifting_tools_5,
            'is_lifting_tools_6' => $this->is_lifting_tools_6,
            'is_lifting_tools_7' => $this->is_lifting_tools_7,
            'is_lifting_tools_8' => $this->is_lifting_tools_8,
            'is_lifting_tools_9' => $this->is_lifting_tools_9,
            'lifting_tools_remarks_1' => $this->lifting_tools_remarks_1,
            'lifting_tools_remarks_2' => $this->lifting_tools_remarks_2,
            'lifting_tools_remarks_3' => $this->lifting_tools_remarks_3,
            'lifting_tools_remarks_4' => $this->lifting_tools_remarks_4,
            'lifting_tools_remarks_5' => $this->lifting_tools_remarks_5,
            'lifting_tools_remarks_6' => $this->lifting_tools_remarks_6,
            'lifting_tools_remarks_7' => $this->lifting_tools_remarks_7,
            'lifting_tools_remarks_8' => $this->lifting_tools_remarks_8,
            'lifting_tools_remarks_9' => $this->lifting_tools_remarks_9,
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
