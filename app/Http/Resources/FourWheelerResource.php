<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FourWheelerResource extends JsonResource
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
            'four_wheeler_des_1' => $this->four_wheeler_des_1,
            'four_wheeler_des_2' => $this->four_wheeler_des_2,
            'four_wheeler_des_3' => $this->four_wheeler_des_3,
            'four_wheeler_des_4' => $this->four_wheeler_des_4,
            'four_wheeler_des_5' => $this->four_wheeler_des_5,
            'four_wheeler_des_6' => $this->four_wheeler_des_6,
            'four_wheeler_des_7' => $this->four_wheeler_des_7,
            'four_wheeler_des_8' => $this->four_wheeler_des_8,
            'four_wheeler_des_9' => $this->four_wheeler_des_9,
            'four_wheeler_des_10' => $this->four_wheeler_des_10,
            'four_wheeler_des_11' => $this->four_wheeler_des_11,
            'four_wheeler_des_12' => $this->four_wheeler_des_12,
            'four_wheeler_des_13' => $this->four_wheeler_des_13,
            'four_wheeler_des_14' => $this->four_wheeler_des_14,
            'four_wheeler_des_15' => $this->four_wheeler_des_15,
            'is_four_wheeler_1' => $this->is_four_wheeler_1,
            'is_four_wheeler_2' => $this->is_four_wheeler_2,
            'is_four_wheeler_3' => $this->is_four_wheeler_3,
            'is_four_wheeler_4' => $this->is_four_wheeler_4,
            'is_four_wheeler_5' => $this->is_four_wheeler_5,
            'is_four_wheeler_6' => $this->is_four_wheeler_6,
            'is_four_wheeler_7' => $this->is_four_wheeler_7,
            'is_four_wheeler_8' => $this->is_four_wheeler_8,
            'is_four_wheeler_9' => $this->is_four_wheeler_9,
            'is_four_wheeler_10' => $this->is_four_wheeler_10,
            'is_four_wheeler_11' => $this->is_four_wheeler_11,
            'is_four_wheeler_12' => $this->is_four_wheeler_12,
            'is_four_wheeler_13' => $this->is_four_wheeler_13,
            'is_four_wheeler_14' => $this->is_four_wheeler_14,
            'is_four_wheeler_15' => $this->is_four_wheeler_15,
            'four_wheeler_remarks_1' => $this->four_wheeler_remarks_1,
            'four_wheeler_remarks_2' => $this->four_wheeler_remarks_2,
            'four_wheeler_remarks_3' => $this->four_wheeler_remarks_3,
            'four_wheeler_remarks_4' => $this->four_wheeler_remarks_4,
            'four_wheeler_remarks_5' => $this->four_wheeler_remarks_5,
            'four_wheeler_remarks_6' => $this->four_wheeler_remarks_6,
            'four_wheeler_remarks_7' => $this->four_wheeler_remarks_7,
            'four_wheeler_remarks_8' => $this->four_wheeler_remarks_8,
            'four_wheeler_remarks_9' => $this->four_wheeler_remarks_9,
            'four_wheeler_remarks_10' => $this->four_wheeler_remarks_10,
            'four_wheeler_remarks_11' => $this->four_wheeler_remarks_11,
            'four_wheeler_remarks_12' => $this->four_wheeler_remarks_12,
            'four_wheeler_remarks_13' => $this->four_wheeler_remarks_13,
            'four_wheeler_remarks_14' => $this->four_wheeler_remarks_14,
            'four_wheeler_remarks_15' => $this->four_wheeler_remarks_15,
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
