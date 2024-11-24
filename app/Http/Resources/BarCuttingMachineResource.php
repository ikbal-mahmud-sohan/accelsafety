<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BarCuttingMachineResource extends JsonResource
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
            'bar_cutting_des_1' => $this->bar_cutting_des_1,
            'bar_cutting_des_2' => $this->bar_cutting_des_2,
            'bar_cutting_des_3' => $this->bar_cutting_des_3,
            'bar_cutting_des_4' => $this->bar_cutting_des_4,
            'bar_cutting_des_5' => $this->bar_cutting_des_5,
            'bar_cutting_des_6' => $this->bar_cutting_des_6,
            'bar_cutting_des_7' => $this->bar_cutting_des_7,
            'bar_cutting_des_8' => $this->bar_cutting_des_8,
            'is_bar_cutting_1' => $this->is_bar_cutting_1,
            'is_bar_cutting_2' => $this->is_bar_cutting_2,
            'is_bar_cutting_3' => $this->is_bar_cutting_3,
            'is_bar_cutting_4' => $this->is_bar_cutting_4,
            'is_bar_cutting_5' => $this->is_bar_cutting_5,
            'is_bar_cutting_6' => $this->is_bar_cutting_6,
            'is_bar_cutting_7' => $this->is_bar_cutting_7,
            'is_bar_cutting_8' => $this->is_bar_cutting_8,
            'bar_cutting_remarks_1' => $this->bar_cutting_remarks_1,
            'bar_cutting_remarks_2' => $this->bar_cutting_remarks_2,
            'bar_cutting_remarks_3' => $this->bar_cutting_remarks_3,
            'bar_cutting_remarks_4' => $this->bar_cutting_remarks_4,
            'bar_cutting_remarks_5' => $this->bar_cutting_remarks_5,
            'bar_cutting_remarks_6' => $this->bar_cutting_remarks_6,
            'bar_cutting_remarks_7' => $this->bar_cutting_remarks_7,
            'bar_cutting_remarks_8' => $this->bar_cutting_remarks_8,
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
