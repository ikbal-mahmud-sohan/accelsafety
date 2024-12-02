<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DieselTankerResource extends JsonResource
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
            'diesel_tanker_des_1' => $this->diesel_tanker_des_1,
            'diesel_tanker_des_2' => $this->diesel_tanker_des_2,
            'diesel_tanker_des_3' => $this->diesel_tanker_des_3,
            'diesel_tanker_des_4' => $this->diesel_tanker_des_4,
            'diesel_tanker_des_5' => $this->diesel_tanker_des_5,
            'diesel_tanker_des_6' => $this->diesel_tanker_des_6,
            'diesel_tanker_des_7' => $this->diesel_tanker_des_7,
            'diesel_tanker_des_8' => $this->diesel_tanker_des_8,
            'diesel_tanker_des_9' => $this->diesel_tanker_des_9,
            'diesel_tanker_des_10' => $this->diesel_tanker_des_10,
            'diesel_tanker_des_11' => $this->diesel_tanker_des_11,
            'diesel_tanker_des_12' => $this->diesel_tanker_des_12,
            'diesel_tanker_des_13' => $this->diesel_tanker_des_13,
            'diesel_tanker_des_14' => $this->diesel_tanker_des_14,
            'diesel_tanker_des_15' => $this->diesel_tanker_des_15,
            'diesel_tanker_des_16' => $this->diesel_tanker_des_16,
            'diesel_tanker_des_17' => $this->diesel_tanker_des_17,
            'diesel_tanker_des_18' => $this->diesel_tanker_des_18,
            'diesel_tanker_des_19' => $this->diesel_tanker_des_19,
            'is_diesel_tanker_1' => $this->is_diesel_tanker_1,
            'is_diesel_tanker_2' => $this->is_diesel_tanker_2,
            'is_diesel_tanker_3' => $this->is_diesel_tanker_3,
            'is_diesel_tanker_4' => $this->is_diesel_tanker_4,
            'is_diesel_tanker_5' => $this->is_diesel_tanker_5,
            'is_diesel_tanker_6' => $this->is_diesel_tanker_6,
            'is_diesel_tanker_7' => $this->is_diesel_tanker_7,
            'is_diesel_tanker_8' => $this->is_diesel_tanker_8,
            'is_diesel_tanker_9' => $this->is_diesel_tanker_9,
            'is_diesel_tanker_10' => $this->is_diesel_tanker_10,
            'is_diesel_tanker_11' => $this->is_diesel_tanker_11,
            'is_diesel_tanker_12' => $this->is_diesel_tanker_12,
            'is_diesel_tanker_13' => $this->is_diesel_tanker_13,
            'is_diesel_tanker_14' => $this->is_diesel_tanker_14,
            'is_diesel_tanker_15' => $this->is_diesel_tanker_15,
            'is_diesel_tanker_16' => $this->is_diesel_tanker_16,
            'is_diesel_tanker_17' => $this->is_diesel_tanker_17,
            'is_diesel_tanker_18' => $this->is_diesel_tanker_18,
            'is_diesel_tanker_19' => $this->is_diesel_tanker_19,
            'diesel_tanker_remarks_1' => $this->diesel_tanker_remarks_1,
            'diesel_tanker_remarks_2' => $this->diesel_tanker_remarks_2,
            'diesel_tanker_remarks_3' => $this->diesel_tanker_remarks_3,
            'diesel_tanker_remarks_4' => $this->diesel_tanker_remarks_4,
            'diesel_tanker_remarks_5' => $this->diesel_tanker_remarks_5,
            'diesel_tanker_remarks_6' => $this->diesel_tanker_remarks_6,
            'diesel_tanker_remarks_7' => $this->diesel_tanker_remarks_7,
            'diesel_tanker_remarks_8' => $this->diesel_tanker_remarks_8,
            'diesel_tanker_remarks_9' => $this->diesel_tanker_remarks_9,
            'diesel_tanker_remarks_10' => $this->diesel_tanker_remarks_10,
            'diesel_tanker_remarks_11' => $this->diesel_tanker_remarks_11,
            'diesel_tanker_remarks_12' => $this->diesel_tanker_remarks_12,
            'diesel_tanker_remarks_13' => $this->diesel_tanker_remarks_13,
            'diesel_tanker_remarks_14' => $this->diesel_tanker_remarks_14,
            'diesel_tanker_remarks_15' => $this->diesel_tanker_remarks_15,
            'diesel_tanker_remarks_16' => $this->diesel_tanker_remarks_16,
            'diesel_tanker_remarks_17' => $this->diesel_tanker_remarks_17,
            'diesel_tanker_remarks_18' => $this->diesel_tanker_remarks_18,
            'diesel_tanker_remarks_19' => $this->diesel_tanker_remarks_19,
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
