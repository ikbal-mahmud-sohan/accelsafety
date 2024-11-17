<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseSafetyChecklistHVResource extends JsonResource
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
            'hv_des_1' => $this->hv_des_1,
            'is_hv_complied_1' => $this->is_hv_complied_1,
            'hv_remarks_1' => $this->hv_remarks_1,
            'hv_des_2' => $this->hv_des_2,
            'is_hv_complied_2' => $this->is_hv_complied_2,
            'hv_remarks_2' => $this->hv_remarks_2,
            'hv_des_3' => $this->hv_des_3,
            'is_hv_complied_3' => $this->is_hv_complied_3,
            'hv_remarks_3' => $this->hv_remarks_3,
            'hv_des_4' => $this->hv_des_4,
            'is_hv_complied_4' => $this->is_hv_complied_4,
            'hv_remarks_4' => $this->hv_remarks_4,
            'hv_des_5' => $this->hv_des_5,
            'is_hv_complied_5' => $this->is_hv_complied_5,
            'hv_remarks_5' => $this->hv_remarks_5,
            'hv_des_6' => $this->hv_des_6,
            'is_hv_complied_6' => $this->is_hv_complied_6,
            'hv_remarks_6' => $this->hv_remarks_6,
            'hv_des_7' => $this->hv_des_7,
            'is_hv_complied_7' => $this->is_hv_complied_7,
            'hv_remarks_7' => $this->hv_remarks_7,
            'hv_des_8' => $this->hv_des_8,
            'is_hv_complied_8' => $this->is_hv_complied_8,
            'hv_remarks_8' => $this->hv_remarks_8,
            'hv_des_9' => $this->hv_des_9,
            'is_hv_complied_9' => $this->is_hv_complied_9,
            'hv_remarks_9' => $this->hv_remarks_9,
            'hv_des_10' => $this->hv_des_10,
            'is_hv_complied_10' => $this->is_hv_complied_10,
            'hv_remarks_10' => $this->hv_remarks_10,
            'hv_des_11' => $this->hv_des_11,
            'is_hv_complied_11' => $this->is_hv_complied_11,
            'hv_remarks_11' => $this->hv_remarks_11,
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
