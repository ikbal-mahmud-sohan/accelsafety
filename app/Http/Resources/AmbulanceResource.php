<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AmbulanceResource extends JsonResource
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
            'ambulance_des_1' => $this->ambulance_des_1,
            'ambulance_des_2' => $this->ambulance_des_2,
            'ambulance_des_3' => $this->ambulance_des_3,
            'ambulance_des_4' => $this->ambulance_des_4,
            'ambulance_des_5' => $this->ambulance_des_5,
            'ambulance_des_6' => $this->ambulance_des_6,
            'ambulance_des_7' => $this->ambulance_des_7,
            'ambulance_des_8' => $this->ambulance_des_8,
            'ambulance_des_9' => $this->ambulance_des_9,
            'ambulance_des_10' => $this->ambulance_des_10,
            'ambulance_des_11' => $this->ambulance_des_11,
            'ambulance_des_12' => $this->ambulance_des_12,
            'ambulance_des_13' => $this->ambulance_des_13,
            'is_ambulance_1' => $this->is_ambulance_1,
            'is_ambulance_2' => $this->is_ambulance_2,
            'is_ambulance_3' => $this->is_ambulance_3,
            'is_ambulance_4' => $this->is_ambulance_4,
            'is_ambulance_5' => $this->is_ambulance_5,
            'is_ambulance_6' => $this->is_ambulance_6,
            'is_ambulance_7' => $this->is_ambulance_7,
            'is_ambulance_8' => $this->is_ambulance_8,
            'is_ambulance_9' => $this->is_ambulance_9,
            'is_ambulance_10' => $this->is_ambulance_10,
            'is_ambulance_11' => $this->is_ambulance_11,
            'is_ambulance_12' => $this->is_ambulance_12,
            'is_ambulance_13' => $this->is_ambulance_13,
            'ambulance_remarks_1' => $this->ambulance_remarks_1,
            'ambulance_remarks_2' => $this->ambulance_remarks_2,
            'ambulance_remarks_3' => $this->ambulance_remarks_3,
            'ambulance_remarks_4' => $this->ambulance_remarks_4,
            'ambulance_remarks_5' => $this->ambulance_remarks_5,
            'ambulance_remarks_6' => $this->ambulance_remarks_6,
            'ambulance_remarks_7' => $this->ambulance_remarks_7,
            'ambulance_remarks_8' => $this->ambulance_remarks_8,
            'ambulance_remarks_9' => $this->ambulance_remarks_9,
            'ambulance_remarks_10' => $this->ambulance_remarks_10,
            'ambulance_remarks_11' => $this->ambulance_remarks_11,
            'ambulance_remarks_12' => $this->ambulance_remarks_12,
            'ambulance_remarks_13' => $this->ambulance_remarks_13,
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
