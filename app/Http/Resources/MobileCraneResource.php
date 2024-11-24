<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MobileCraneResource extends JsonResource
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
            'mobile_crane_des_1' => $this->mobile_crane_des_1,
            'mobile_crane_des_2' => $this->mobile_crane_des_2,
            'mobile_crane_des_3' => $this->mobile_crane_des_3,
            'mobile_crane_des_4' => $this->mobile_crane_des_4,
            'mobile_crane_des_5' => $this->mobile_crane_des_5,
            'mobile_crane_des_6' => $this->mobile_crane_des_6,
            'mobile_crane_des_7' => $this->mobile_crane_des_7,
            'mobile_crane_des_8' => $this->mobile_crane_des_8,
            'mobile_crane_des_9' => $this->mobile_crane_des_9,
            'mobile_crane_des_10' => $this->mobile_crane_des_10,
            'mobile_crane_des_11' => $this->mobile_crane_des_11,
            'mobile_crane_des_12' => $this->mobile_crane_des_12,
            'mobile_crane_des_13' => $this->mobile_crane_des_13,
            'mobile_crane_des_14' => $this->mobile_crane_des_14,
            'mobile_crane_des_15' => $this->mobile_crane_des_15,
            'mobile_crane_des_16' => $this->mobile_crane_des_16,
            'mobile_crane_des_17' => $this->mobile_crane_des_17,
            'mobile_crane_des_18' => $this->mobile_crane_des_18,
            'mobile_crane_des_19' => $this->mobile_crane_des_19,
            'is_mobile_crane_1' => $this->is_mobile_crane_1,
            'is_mobile_crane_2' => $this->is_mobile_crane_2,
            'is_mobile_crane_3' => $this->is_mobile_crane_3,
            'is_mobile_crane_4' => $this->is_mobile_crane_4,
            'is_mobile_crane_5' => $this->is_mobile_crane_5,
            'is_mobile_crane_6' => $this->is_mobile_crane_6,
            'is_mobile_crane_7' => $this->is_mobile_crane_7,
            'is_mobile_crane_8' => $this->is_mobile_crane_8,
            'is_mobile_crane_9' => $this->is_mobile_crane_9,
            'is_mobile_crane_10' => $this->is_mobile_crane_10,
            'is_mobile_crane_11' => $this->is_mobile_crane_11,
            'is_mobile_crane_12' => $this->is_mobile_crane_12,
            'is_mobile_crane_13' => $this->is_mobile_crane_13,
            'is_mobile_crane_14' => $this->is_mobile_crane_14,
            'is_mobile_crane_15' => $this->is_mobile_crane_15,
            'is_mobile_crane_16' => $this->is_mobile_crane_16,
            'is_mobile_crane_17' => $this->is_mobile_crane_17,
            'is_mobile_crane_18' => $this->is_mobile_crane_18,
            'is_mobile_crane_19' => $this->is_mobile_crane_19,
            'mobile_crane_remarks_1' => $this->mobile_crane_remarks_1,
            'mobile_crane_remarks_2' => $this->mobile_crane_remarks_2,
            'mobile_crane_remarks_3' => $this->mobile_crane_remarks_3,
            'mobile_crane_remarks_4' => $this->mobile_crane_remarks_4,
            'mobile_crane_remarks_5' => $this->mobile_crane_remarks_5,
            'mobile_crane_remarks_6' => $this->mobile_crane_remarks_6,
            'mobile_crane_remarks_7' => $this->mobile_crane_remarks_7,
            'mobile_crane_remarks_8' => $this->mobile_crane_remarks_8,
            'mobile_crane_remarks_9' => $this->mobile_crane_remarks_9,
            'mobile_crane_remarks_10' => $this->mobile_crane_remarks_10,
            'mobile_crane_remarks_11' => $this->mobile_crane_remarks_11,
            'mobile_crane_remarks_12' => $this->mobile_crane_remarks_12,
            'mobile_crane_remarks_13' => $this->mobile_crane_remarks_13,
            'mobile_crane_remarks_14' => $this->mobile_crane_remarks_14,
            'mobile_crane_remarks_15' => $this->mobile_crane_remarks_15,
            'mobile_crane_remarks_16' => $this->mobile_crane_remarks_16,
            'mobile_crane_remarks_17' => $this->mobile_crane_remarks_17,
            'mobile_crane_remarks_18' => $this->mobile_crane_remarks_18,
            'mobile_crane_remarks_19' => $this->mobile_crane_remarks_19,
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
