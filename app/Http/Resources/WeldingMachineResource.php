<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WeldingMachineResource extends JsonResource
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
            'welding_machine_des_1' => $this->welding_machine_des_1,
            'welding_machine_des_2' => $this->welding_machine_des_2,
            'welding_machine_des_3' => $this->welding_machine_des_3,
            'welding_machine_des_4' => $this->welding_machine_des_4,
            'welding_machine_des_5' => $this->welding_machine_des_5,
            'welding_machine_des_6' => $this->welding_machine_des_6,
            'welding_machine_des_7' => $this->welding_machine_des_7,
            'welding_machine_des_8' => $this->welding_machine_des_8,
            'welding_machine_des_9' => $this->welding_machine_des_9,
            'welding_machine_des_10' => $this->welding_machine_des_10,
            'welding_machine_des_11' => $this->welding_machine_des_11,
            'is_welding_machine_1' => $this->is_welding_machine_1,
            'is_welding_machine_2' => $this->is_welding_machine_2,
            'is_welding_machine_3' => $this->is_welding_machine_3,
            'is_welding_machine_4' => $this->is_welding_machine_4,
            'is_welding_machine_5' => $this->is_welding_machine_5,
            'is_welding_machine_6' => $this->is_welding_machine_6,
            'is_welding_machine_7' => $this->is_welding_machine_7,
            'is_welding_machine_8' => $this->is_welding_machine_8,
            'is_welding_machine_9' => $this->is_welding_machine_9,
            'is_welding_machine_10' => $this->is_welding_machine_10,
            'is_welding_machine_11' => $this->is_welding_machine_11,
            'welding_machine_remarks_1' => $this->welding_machine_remarks_1,
            'welding_machine_remarks_2' => $this->welding_machine_remarks_2,
            'welding_machine_remarks_3' => $this->welding_machine_remarks_3,
            'welding_machine_remarks_4' => $this->welding_machine_remarks_4,
            'welding_machine_remarks_5' => $this->welding_machine_remarks_5,
            'welding_machine_remarks_6' => $this->welding_machine_remarks_6,
            'welding_machine_remarks_7' => $this->welding_machine_remarks_7,
            'welding_machine_remarks_8' => $this->welding_machine_remarks_8,
            'welding_machine_remarks_9' => $this->welding_machine_remarks_9,
            'welding_machine_remarks_10' => $this->welding_machine_remarks_10,
            'welding_machine_remarks_11' => $this->welding_machine_remarks_11,
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
