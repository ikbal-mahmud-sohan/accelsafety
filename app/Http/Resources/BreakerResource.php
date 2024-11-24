<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BreakerResource extends JsonResource
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
            'breaker_des_1' => $this->breaker_des_1,
            'breaker_des_2' => $this->breaker_des_2,
            'breaker_des_3' => $this->breaker_des_3,
            'breaker_des_4' => $this->breaker_des_4,
            'breaker_des_5' => $this->breaker_des_5,
            'breaker_des_6' => $this->breaker_des_6,
            'breaker_des_7' => $this->breaker_des_7,
            'is_breaker_1' => $this->is_breaker_1,
            'is_breaker_2' => $this->is_breaker_2,
            'is_breaker_3' => $this->is_breaker_3,
            'is_breaker_4' => $this->is_breaker_4,
            'is_breaker_5' => $this->is_breaker_5,
            'is_breaker_6' => $this->is_breaker_6,
            'is_breaker_7' => $this->is_breaker_7,
            'breaker_remarks_1' => $this->breaker_remarks_1,
            'breaker_remarks_2' => $this->breaker_remarks_2,
            'breaker_remarks_3' => $this->breaker_remarks_3,
            'breaker_remarks_4' => $this->breaker_remarks_4,
            'breaker_remarks_5' => $this->breaker_remarks_5,
            'breaker_remarks_6' => $this->breaker_remarks_6,
            'breaker_remarks_7' => $this->breaker_remarks_7,
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
