<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ElectricalPumpResource extends JsonResource
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
            'electrical_pump_des_1' => $this->electrical_pump_des_1,
            'electrical_pump_des_2' => $this->electrical_pump_des_2,
            'electrical_pump_des_3' => $this->electrical_pump_des_3,
            'electrical_pump_des_4' => $this->electrical_pump_des_4,
            'electrical_pump_des_5' => $this->electrical_pump_des_5,
            'electrical_pump_des_6' => $this->electrical_pump_des_6,
            'electrical_pump_des_7' => $this->electrical_pump_des_7,
            'is_electrical_pump_1' => $this->is_electrical_pump_1,
            'is_electrical_pump_2' => $this->is_electrical_pump_2,
            'is_electrical_pump_3' => $this->is_electrical_pump_3,
            'is_electrical_pump_4' => $this->is_electrical_pump_4,
            'is_electrical_pump_5' => $this->is_electrical_pump_5,
            'is_electrical_pump_6' => $this->is_electrical_pump_6,
            'is_electrical_pump_7' => $this->is_electrical_pump_7,
            'electrical_pump_remarks_1' => $this->electrical_pump_remarks_1,
            'electrical_pump_remarks_2' => $this->electrical_pump_remarks_2,
            'electrical_pump_remarks_3' => $this->electrical_pump_remarks_3,
            'electrical_pump_remarks_4' => $this->electrical_pump_remarks_4,
            'electrical_pump_remarks_5' => $this->electrical_pump_remarks_5,
            'electrical_pump_remarks_6' => $this->electrical_pump_remarks_6,
            'electrical_pump_remarks_7' => $this->electrical_pump_remarks_7,
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
