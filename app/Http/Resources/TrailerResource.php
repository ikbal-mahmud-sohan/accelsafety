<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TrailerResource extends JsonResource
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
            'trailer_des_1' => $this->trailer_des_1,
            'trailer_des_2' => $this->trailer_des_2,
            'trailer_des_3' => $this->trailer_des_3,
            'trailer_des_4' => $this->trailer_des_4,
            'trailer_des_5' => $this->trailer_des_5,
            'trailer_des_6' => $this->trailer_des_6,
            'trailer_des_7' => $this->trailer_des_7,
            'trailer_des_8' => $this->trailer_des_8,
            'trailer_des_9' => $this->trailer_des_9,
            'trailer_des_10' => $this->trailer_des_10,
            'trailer_des_11' => $this->trailer_des_11,
            'trailer_des_12' => $this->trailer_des_12,
            'trailer_des_13' => $this->trailer_des_13,
            'trailer_des_14' => $this->trailer_des_14,
            'trailer_des_15' => $this->trailer_des_15,
            'is_trailer_1' => $this->is_trailer_1,
            'is_trailer_2' => $this->is_trailer_2,
            'is_trailer_3' => $this->is_trailer_3,
            'is_trailer_4' => $this->is_trailer_4,
            'is_trailer_5' => $this->is_trailer_5,
            'is_trailer_6' => $this->is_trailer_6,
            'is_trailer_7' => $this->is_trailer_7,
            'is_trailer_8' => $this->is_trailer_8,
            'is_trailer_9' => $this->is_trailer_9,
            'is_trailer_10' => $this->is_trailer_10,
            'is_trailer_11' => $this->is_trailer_11,
            'is_trailer_12' => $this->is_trailer_12,
            'is_trailer_13' => $this->is_trailer_13,
            'is_trailer_14' => $this->is_trailer_14,
            'is_trailer_15' => $this->is_trailer_15,
            'trailer_remarks_1' => $this->trailer_remarks_1,
            'trailer_remarks_2' => $this->trailer_remarks_2,
            'trailer_remarks_3' => $this->trailer_remarks_3,
            'trailer_remarks_4' => $this->trailer_remarks_4,
            'trailer_remarks_5' => $this->trailer_remarks_5,
            'trailer_remarks_6' => $this->trailer_remarks_6,
            'trailer_remarks_7' => $this->trailer_remarks_7,
            'trailer_remarks_8' => $this->trailer_remarks_8,
            'trailer_remarks_9' => $this->trailer_remarks_9,
            'trailer_remarks_10' => $this->trailer_remarks_10,
            'trailer_remarks_11' => $this->trailer_remarks_11,
            'trailer_remarks_12' => $this->trailer_remarks_12,
            'trailer_remarks_13' => $this->trailer_remarks_13,
            'trailer_remarks_14' => $this->trailer_remarks_14,
            'trailer_remarks_15' => $this->trailer_remarks_15,
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
