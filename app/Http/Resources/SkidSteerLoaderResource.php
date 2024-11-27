<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SkidSteerLoaderResource extends JsonResource
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
            'skid_steer_des_1' => $this->skid_steer_des_1,
            'skid_steer_des_2' => $this->skid_steer_des_2,
            'skid_steer_des_3' => $this->skid_steer_des_3,
            'skid_steer_des_4' => $this->skid_steer_des_4,
            'skid_steer_des_5' => $this->skid_steer_des_5,
            'skid_steer_des_6' => $this->skid_steer_des_6,
            'skid_steer_des_7' => $this->skid_steer_des_7,
            'skid_steer_des_8' => $this->skid_steer_des_8,
            'skid_steer_des_9' => $this->skid_steer_des_9,
            'skid_steer_des_10' => $this->skid_steer_des_10,
            'skid_steer_des_11' => $this->skid_steer_des_11,
            'skid_steer_des_12' => $this->skid_steer_des_12,
            'skid_steer_des_13' => $this->skid_steer_des_13,
            'is_skid_steer_1' => $this->is_skid_steer_1,
            'is_skid_steer_2' => $this->is_skid_steer_2,
            'is_skid_steer_3' => $this->is_skid_steer_3,
            'is_skid_steer_4' => $this->is_skid_steer_4,
            'is_skid_steer_5' => $this->is_skid_steer_5,
            'is_skid_steer_6' => $this->is_skid_steer_6,
            'is_skid_steer_7' => $this->is_skid_steer_7,
            'is_skid_steer_8' => $this->is_skid_steer_8,
            'is_skid_steer_9' => $this->is_skid_steer_9,
            'is_skid_steer_10' => $this->is_skid_steer_10,
            'is_skid_steer_11' => $this->is_skid_steer_11,
            'is_skid_steer_12' => $this->is_skid_steer_12,
            'is_skid_steer_13' => $this->is_skid_steer_13,
            'skid_steer_remarks_1' => $this->skid_steer_remarks_1,
            'skid_steer_remarks_2' => $this->skid_steer_remarks_2,
            'skid_steer_remarks_3' => $this->skid_steer_remarks_3,
            'skid_steer_remarks_4' => $this->skid_steer_remarks_4,
            'skid_steer_remarks_5' => $this->skid_steer_remarks_5,
            'skid_steer_remarks_6' => $this->skid_steer_remarks_6,
            'skid_steer_remarks_7' => $this->skid_steer_remarks_7,
            'skid_steer_remarks_8' => $this->skid_steer_remarks_8,
            'skid_steer_remarks_9' => $this->skid_steer_remarks_9,
            'skid_steer_remarks_10' => $this->skid_steer_remarks_10,
            'skid_steer_remarks_11' => $this->skid_steer_remarks_11,
            'skid_steer_remarks_12' => $this->skid_steer_remarks_12,
            'skid_steer_remarks_13' => $this->skid_steer_remarks_13,
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
