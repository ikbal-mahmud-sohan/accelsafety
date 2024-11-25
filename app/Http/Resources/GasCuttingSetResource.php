<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GasCuttingSetResource extends JsonResource
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
            'gas_cutting_des_1' => $this->gas_cutting_des_1,
            'gas_cutting_des_2' => $this->gas_cutting_des_2,
            'gas_cutting_des_3' => $this->gas_cutting_des_3,
            'gas_cutting_des_4' => $this->gas_cutting_des_4,
            'gas_cutting_des_5' => $this->gas_cutting_des_5,
            'gas_cutting_des_6' => $this->gas_cutting_des_6,
            'gas_cutting_des_7' => $this->gas_cutting_des_7,
            'gas_cutting_des_8' => $this->gas_cutting_des_8,
            'gas_cutting_des_9' => $this->gas_cutting_des_9,
            'gas_cutting_des_10' => $this->gas_cutting_des_10,
            'gas_cutting_des_11' => $this->gas_cutting_des_11,
            'gas_cutting_des_12' => $this->gas_cutting_des_12,
            'gas_cutting_des_13' => $this->gas_cutting_des_13,
            'gas_cutting_des_14' => $this->gas_cutting_des_14,
            'gas_cutting_des_15' => $this->gas_cutting_des_15,
            'is_gas_cutting_1' => $this->is_gas_cutting_1,
            'is_gas_cutting_2' => $this->is_gas_cutting_2,
            'is_gas_cutting_3' => $this->is_gas_cutting_3,
            'is_gas_cutting_4' => $this->is_gas_cutting_4,
            'is_gas_cutting_5' => $this->is_gas_cutting_5,
            'is_gas_cutting_6' => $this->is_gas_cutting_6,
            'is_gas_cutting_7' => $this->is_gas_cutting_7,
            'is_gas_cutting_8' => $this->is_gas_cutting_8,
            'is_gas_cutting_9' => $this->is_gas_cutting_9,
            'is_gas_cutting_10' => $this->is_gas_cutting_10,
            'is_gas_cutting_11' => $this->is_gas_cutting_11,
            'is_gas_cutting_12' => $this->is_gas_cutting_12,
            'is_gas_cutting_13' => $this->is_gas_cutting_13,
            'is_gas_cutting_14' => $this->is_gas_cutting_14,
            'is_gas_cutting_15' => $this->is_gas_cutting_15,
            'gas_cutting_remarks_1' => $this->gas_cutting_remarks_1,
            'gas_cutting_remarks_2' => $this->gas_cutting_remarks_2,
            'gas_cutting_remarks_3' => $this->gas_cutting_remarks_3,
            'gas_cutting_remarks_4' => $this->gas_cutting_remarks_4,
            'gas_cutting_remarks_5' => $this->gas_cutting_remarks_5,
            'gas_cutting_remarks_6' => $this->gas_cutting_remarks_6,
            'gas_cutting_remarks_7' => $this->gas_cutting_remarks_7,
            'gas_cutting_remarks_8' => $this->gas_cutting_remarks_8,
            'gas_cutting_remarks_9' => $this->gas_cutting_remarks_9,
            'gas_cutting_remarks_10' => $this->gas_cutting_remarks_10,
            'gas_cutting_remarks_11' => $this->gas_cutting_remarks_11,
            'gas_cutting_remarks_12' => $this->gas_cutting_remarks_12,
            'gas_cutting_remarks_13' => $this->gas_cutting_remarks_13,
            'gas_cutting_remarks_14' => $this->gas_cutting_remarks_14,
            'gas_cutting_remarks_15' => $this->gas_cutting_remarks_15,
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
