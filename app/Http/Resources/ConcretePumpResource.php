<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConcretePumpResource extends JsonResource
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
            'concrete_pumps_des_1' => $this->concrete_pumps_des_1,
            'concrete_pumps_des_2' => $this->concrete_pumps_des_2,
            'concrete_pumps_des_3' => $this->concrete_pumps_des_3,
            'concrete_pumps_des_4' => $this->concrete_pumps_des_4,
            'concrete_pumps_des_5' => $this->concrete_pumps_des_5,
            'concrete_pumps_des_6' => $this->concrete_pumps_des_6,
            'concrete_pumps_des_7' => $this->concrete_pumps_des_7,
            'concrete_pumps_des_8' => $this->concrete_pumps_des_8,
            'concrete_pumps_des_9' => $this->concrete_pumps_des_9,
            'concrete_pumps_des_10' => $this->concrete_pumps_des_10,
            'concrete_pumps_des_11' => $this->concrete_pumps_des_11,
            'concrete_pumps_des_12' => $this->concrete_pumps_des_11,
            'concrete_pumps_des_13' => $this->concrete_pumps_des_11,
            'concrete_pumps_des_14' => $this->concrete_pumps_des_11,
            'is_concrete_pumps_1' => $this->is_concrete_pumps_1,
            'is_concrete_pumps_2' => $this->is_concrete_pumps_2,
            'is_concrete_pumps_3' => $this->is_concrete_pumps_3,
            'is_concrete_pumps_4' => $this->is_concrete_pumps_4,
            'is_concrete_pumps_5' => $this->is_concrete_pumps_5,
            'is_concrete_pumps_6' => $this->is_concrete_pumps_6,
            'is_concrete_pumps_7' => $this->is_concrete_pumps_7,
            'is_concrete_pumps_8' => $this->is_concrete_pumps_8,
            'is_concrete_pumps_9' => $this->is_concrete_pumps_9,
            'is_concrete_pumps_10' => $this->is_concrete_pumps_10,
            'is_concrete_pumps_11' => $this->is_concrete_pumps_11,
            'is_concrete_pumps_12' => $this->is_concrete_pumps_11,
            'is_concrete_pumps_13' => $this->is_concrete_pumps_11,
            'is_concrete_pumps_14' => $this->is_concrete_pumps_11,
            'concrete_pumps_remarks_1' => $this->concrete_pumps_remarks_1,
            'concrete_pumps_remarks_2' => $this->concrete_pumps_remarks_2,
            'concrete_pumps_remarks_3' => $this->concrete_pumps_remarks_3,
            'concrete_pumps_remarks_4' => $this->concrete_pumps_remarks_4,
            'concrete_pumps_remarks_5' => $this->concrete_pumps_remarks_5,
            'concrete_pumps_remarks_6' => $this->concrete_pumps_remarks_6,
            'concrete_pumps_remarks_7' => $this->concrete_pumps_remarks_7,
            'concrete_pumps_remarks_8' => $this->concrete_pumps_remarks_8,
            'concrete_pumps_remarks_9' => $this->concrete_pumps_remarks_9,
            'concrete_pumps_remarks_10' => $this->concrete_pumps_remarks_10,
            'concrete_pumps_remarks_11' => $this->concrete_pumps_remarks_11,
            'concrete_pumps_remarks_12' => $this->concrete_pumps_remarks_11,
            'concrete_pumps_remarks_13' => $this->concrete_pumps_remarks_11,
            'concrete_pumps_remarks_14' => $this->concrete_pumps_remarks_11,
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
