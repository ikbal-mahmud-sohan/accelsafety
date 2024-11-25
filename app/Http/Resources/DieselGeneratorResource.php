<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DieselGeneratorResource extends JsonResource
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
            'diesel_generator_des_1' => $this->diesel_generator_des_1,
            'diesel_generator_des_2' => $this->diesel_generator_des_2,
            'diesel_generator_des_3' => $this->diesel_generator_des_3,
            'diesel_generator_des_4' => $this->diesel_generator_des_4,
            'diesel_generator_des_5' => $this->diesel_generator_des_5,
            'diesel_generator_des_6' => $this->diesel_generator_des_6,
            'diesel_generator_des_7' => $this->diesel_generator_des_7,
            'diesel_generator_des_8' => $this->diesel_generator_des_8,
            'diesel_generator_des_9' => $this->diesel_generator_des_9,
            'diesel_generator_des_10' => $this->diesel_generator_des_10,
            'diesel_generator_des_11' => $this->diesel_generator_des_11,
            'diesel_generator_des_12' => $this->diesel_generator_des_12,
            'diesel_generator_des_13' => $this->diesel_generator_des_13,
            'diesel_generator_des_14' => $this->diesel_generator_des_14,
            'is_diesel_generator_1' => $this->is_diesel_generator_1,
            'is_diesel_generator_2' => $this->is_diesel_generator_2,
            'is_diesel_generator_3' => $this->is_diesel_generator_3,
            'is_diesel_generator_4' => $this->is_diesel_generator_4,
            'is_diesel_generator_5' => $this->is_diesel_generator_5,
            'is_diesel_generator_6' => $this->is_diesel_generator_6,
            'is_diesel_generator_7' => $this->is_diesel_generator_7,
            'is_diesel_generator_8' => $this->is_diesel_generator_8,
            'is_diesel_generator_9' => $this->is_diesel_generator_9,
            'is_diesel_generator_10' => $this->is_diesel_generator_10,
            'is_diesel_generator_11' => $this->is_diesel_generator_11,
            'is_diesel_generator_12' => $this->is_diesel_generator_12,
            'is_diesel_generator_13' => $this->is_diesel_generator_13,
            'is_diesel_generator_14' => $this->is_diesel_generator_14,
            'diesel_generator_remarks_1' => $this->diesel_generator_remarks_1,
            'diesel_generator_remarks_2' => $this->diesel_generator_remarks_2,
            'diesel_generator_remarks_3' => $this->diesel_generator_remarks_3,
            'diesel_generator_remarks_4' => $this->diesel_generator_remarks_4,
            'diesel_generator_remarks_5' => $this->diesel_generator_remarks_5,
            'diesel_generator_remarks_6' => $this->diesel_generator_remarks_6,
            'diesel_generator_remarks_7' => $this->diesel_generator_remarks_7,
            'diesel_generator_remarks_8' => $this->diesel_generator_remarks_8,
            'diesel_generator_remarks_9' => $this->diesel_generator_remarks_9,
            'diesel_generator_remarks_10' => $this->diesel_generator_remarks_10,
            'diesel_generator_remarks_11' => $this->diesel_generator_remarks_11,
            'diesel_generator_remarks_12' => $this->diesel_generator_remarks_12,
            'diesel_generator_remarks_13' => $this->diesel_generator_remarks_13,
            'diesel_generator_remarks_14' => $this->diesel_generator_remarks_14,
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
