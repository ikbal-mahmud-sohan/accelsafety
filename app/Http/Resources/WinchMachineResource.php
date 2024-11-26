<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WinchMachineResource extends JsonResource
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
            'winch_machine_des_1' => $this->winch_machine_des_1,
            'winch_machine_des_2' => $this->winch_machine_des_2,
            'winch_machine_des_3' => $this->winch_machine_des_3,
            'winch_machine_des_4' => $this->winch_machine_des_4,
            'winch_machine_des_5' => $this->winch_machine_des_5,
            'winch_machine_des_6' => $this->winch_machine_des_6,
            'winch_machine_des_7' => $this->winch_machine_des_7,
            'winch_machine_des_8' => $this->winch_machine_des_8,
            'winch_machine_des_9' => $this->winch_machine_des_9,
            'winch_machine_des_10' => $this->winch_machine_des_10,
            'winch_machine_des_11' => $this->winch_machine_des_11,
            'is_winch_machine_1' => $this->is_winch_machine_1,
            'is_winch_machine_2' => $this->is_winch_machine_2,
            'is_winch_machine_3' => $this->is_winch_machine_3,
            'is_winch_machine_4' => $this->is_winch_machine_4,
            'is_winch_machine_5' => $this->is_winch_machine_5,
            'is_winch_machine_6' => $this->is_winch_machine_6,
            'is_winch_machine_7' => $this->is_winch_machine_7,
            'is_winch_machine_8' => $this->is_winch_machine_8,
            'is_winch_machine_9' => $this->is_winch_machine_9,
            'is_winch_machine_10' => $this->is_winch_machine_10,
            'is_winch_machine_11' => $this->is_winch_machine_11,
            'winch_machine_remarks_1' => $this->winch_machine_remarks_1,
            'winch_machine_remarks_2' => $this->winch_machine_remarks_2,
            'winch_machine_remarks_3' => $this->winch_machine_remarks_3,
            'winch_machine_remarks_4' => $this->winch_machine_remarks_4,
            'winch_machine_remarks_5' => $this->winch_machine_remarks_5,
            'winch_machine_remarks_6' => $this->winch_machine_remarks_6,
            'winch_machine_remarks_7' => $this->winch_machine_remarks_7,
            'winch_machine_remarks_8' => $this->winch_machine_remarks_8,
            'winch_machine_remarks_9' => $this->winch_machine_remarks_9,
            'winch_machine_remarks_10' => $this->winch_machine_remarks_10,
            'winch_machine_remarks_11' => $this->winch_machine_remarks_11,
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
