<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DrillMachineResource extends JsonResource
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
            'boom_placer_des_1' => $this->boom_placer_des_1,
            'boom_placer_des_2' => $this->boom_placer_des_2,
            'boom_placer_des_3' => $this->boom_placer_des_3,
            'boom_placer_des_4' => $this->boom_placer_des_4,
            'boom_placer_des_5' => $this->boom_placer_des_5,
            'boom_placer_des_6' => $this->boom_placer_des_6,
            'boom_placer_des_7' => $this->boom_placer_des_7,
            'boom_placer_des_8' => $this->boom_placer_des_8,
            'boom_placer_des_9' => $this->boom_placer_des_9,
            'boom_placer_des_10' => $this->boom_placer_des_10,
            'boom_placer_des_11' => $this->boom_placer_des_11,
            'boom_placer_des_12' => $this->boom_placer_des_12,
            'boom_placer_des_13' => $this->boom_placer_des_13,
            'boom_placer_des_14' => $this->boom_placer_des_14,
            'boom_placer_des_15' => $this->boom_placer_des_15,
            'boom_placer_des_16' => $this->boom_placer_des_16,
            'boom_placer_des_17' => $this->boom_placer_des_17,
            'boom_placer_des_18' => $this->boom_placer_des_18,
            'is_boom_placer_1' => $this->is_boom_placer_1,
            'is_boom_placer_2' => $this->is_boom_placer_2,
            'is_boom_placer_3' => $this->is_boom_placer_3,
            'is_boom_placer_4' => $this->is_boom_placer_4,
            'is_boom_placer_5' => $this->is_boom_placer_5,
            'is_boom_placer_6' => $this->is_boom_placer_6,
            'is_boom_placer_7' => $this->is_boom_placer_7,
            'is_boom_placer_8' => $this->is_boom_placer_8,
            'is_boom_placer_9' => $this->is_boom_placer_9,
            'is_boom_placer_10' => $this->is_boom_placer_10,
            'is_boom_placer_11' => $this->is_boom_placer_11,
            'is_boom_placer_12' => $this->is_boom_placer_12,
            'is_boom_placer_13' => $this->is_boom_placer_13,
            'is_boom_placer_14' => $this->is_boom_placer_14,
            'is_boom_placer_15' => $this->is_boom_placer_15,
            'is_boom_placer_16' => $this->is_boom_placer_16,
            'is_boom_placer_17' => $this->is_boom_placer_17,
            'is_boom_placer_18' => $this->is_boom_placer_18,
            'boom_placer_remarks_1' => $this->boom_placer_remarks_1,
            'boom_placer_remarks_2' => $this->boom_placer_remarks_2,
            'boom_placer_remarks_3' => $this->boom_placer_remarks_3,
            'boom_placer_remarks_4' => $this->boom_placer_remarks_4,
            'boom_placer_remarks_5' => $this->boom_placer_remarks_5,
            'boom_placer_remarks_6' => $this->boom_placer_remarks_6,
            'boom_placer_remarks_7' => $this->boom_placer_remarks_7,
            'boom_placer_remarks_8' => $this->boom_placer_remarks_8,
            'boom_placer_remarks_9' => $this->boom_placer_remarks_9,
            'boom_placer_remarks_10' => $this->boom_placer_remarks_10,
            'boom_placer_remarks_11' => $this->boom_placer_remarks_11,
            'boom_placer_remarks_12' => $this->boom_placer_remarks_12,
            'boom_placer_remarks_13' => $this->boom_placer_remarks_13,
            'boom_placer_remarks_14' => $this->boom_placer_remarks_14,
            'boom_placer_remarks_15' => $this->boom_placer_remarks_15,
            'boom_placer_remarks_16' => $this->boom_placer_remarks_16,
            'boom_placer_remarks_17' => $this->boom_placer_remarks_17,
            'boom_placer_remarks_18' => $this->boom_placer_remarks_18,
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
