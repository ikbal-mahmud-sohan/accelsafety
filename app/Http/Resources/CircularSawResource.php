<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CircularSawResource extends JsonResource
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
            'circular_saw_des_1' => $this->circular_saw_des_1,
            'circular_saw_des_2' => $this->circular_saw_des_2,
            'circular_saw_des_3' => $this->circular_saw_des_3,
            'circular_saw_des_4' => $this->circular_saw_des_4,
            'circular_saw_des_5' => $this->circular_saw_des_5,
            'circular_saw_des_6' => $this->circular_saw_des_6,
            'circular_saw_des_7' => $this->circular_saw_des_7,
            'circular_saw_des_8' => $this->circular_saw_des_8,
            'circular_saw_des_9' => $this->circular_saw_des_9,
            'is_circular_saw_1' => $this->is_circular_saw_1,
            'is_circular_saw_2' => $this->is_circular_saw_2,
            'is_circular_saw_3' => $this->is_circular_saw_3,
            'is_circular_saw_4' => $this->is_circular_saw_4,
            'is_circular_saw_5' => $this->is_circular_saw_5,
            'is_circular_saw_6' => $this->is_circular_saw_6,
            'is_circular_saw_7' => $this->is_circular_saw_7,
            'is_circular_saw_8' => $this->is_circular_saw_8,
            'is_circular_saw_9' => $this->is_circular_saw_9,
            'circular_saw_remarks_1' => $this->circular_saw_remarks_1,
            'circular_saw_remarks_2' => $this->circular_saw_remarks_2,
            'circular_saw_remarks_3' => $this->circular_saw_remarks_3,
            'circular_saw_remarks_4' => $this->circular_saw_remarks_4,
            'circular_saw_remarks_5' => $this->circular_saw_remarks_5,
            'circular_saw_remarks_6' => $this->circular_saw_remarks_6,
            'circular_saw_remarks_7' => $this->circular_saw_remarks_7,
            'circular_saw_remarks_8' => $this->circular_saw_remarks_8,
            'circular_saw_remarks_9' => $this->circular_saw_remarks_9,
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
