<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IsgecBackhoeLoaderResource extends JsonResource
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
            'isgec' => (bool)$this->isgec,
            'hired' => (bool)$this->hired,
            'contractor' => (bool)$this->contractor,
            'is_des_1' => (bool)$this->is_des_1,
            'des_remarks_1' => $this->des_remarks_1,
            'is_des_2' => (bool)$this->is_des_2,
            'des_remarks_2' => $this->des_remarks_2,
            'is_des_3' => (bool)$this->is_des_3,
            'des_remarks_3' => $this->des_remarks_3,
            'is_des_4' => (bool)$this->is_des_4,
            'des_remarks_4' => $this->des_remarks_4,
            'is_des_5' => (bool)$this->is_des_5,
            'des_remarks_5' => $this->des_remarks_5,
            'is_des_6' => (bool)$this->is_des_6,
            'des_remarks_6' => $this->des_remarks_6,
            'is_des_7' => (bool)$this->is_des_7,
            'des_remarks_7' => $this->des_remarks_7,
            'is_des_8' => (bool)$this->is_des_8,
            'des_remarks_8' => $this->des_remarks_8,
            'is_des_9' => (bool)$this->is_des_9,
            'des_remarks_9' => $this->des_remarks_9,
            'is_des_10' => (bool)$this->is_des_10,
            'des_remarks_10' => $this->des_remarks_10,
            'is_des_11' => (bool)$this->is_des_11,
            'des_remarks_11' => $this->des_remarks_11,
            'is_des_12' => (bool)$this->is_des_12,
            'des_remarks_12' => $this->des_remarks_12,
            'is_des_13' => (bool)$this->is_des_13,
            'des_remarks_13' => $this->des_remarks_13,
            'is_des_14' => (bool)$this->is_des_14,
            'des_remarks_14' => $this->des_remarks_14,
            'is_fit' => (bool)$this->is_fit,
            'is_partially_fit' => (bool)$this->is_partially_fit,
            'is_unfit' => (bool)$this->is_unfit,
            'inspected_by_name' => $this->inspected_by_name,
            'inspected_by_signature' => $this->inspected_by_signature,
            'inspected_by_date' => $this->inspected_by_date,
            'reviewed_by_name' => $this->reviewed_by_name,
            'reviewed_by_signature' => $this->reviewed_by_signature,
            'reviewed_by_date' => $this->reviewed_by_date,

        ];
    }
}
