<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChainPulleyBlockResource extends JsonResource
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
            'chain_pulley_des_1' => $this->chain_pulley_des_1,
            'chain_pulley_des_2' => $this->chain_pulley_des_2,
            'chain_pulley_des_3' => $this->chain_pulley_des_3,
            'chain_pulley_des_4' => $this->chain_pulley_des_4,
            'chain_pulley_des_5' => $this->chain_pulley_des_5,
            'chain_pulley_des_6' => $this->chain_pulley_des_6,
            'is_chain_pulley_1' => $this->is_chain_pulley_1,
            'is_chain_pulley_2' => $this->is_chain_pulley_2,
            'is_chain_pulley_3' => $this->is_chain_pulley_3,
            'is_chain_pulley_4' => $this->is_chain_pulley_4,
            'is_chain_pulley_5' => $this->is_chain_pulley_5,
            'is_chain_pulley_6' => $this->is_chain_pulley_6,
            'chain_pulley_remarks_1' => $this->chain_pulley_remarks_1,
            'chain_pulley_remarks_2' => $this->chain_pulley_remarks_2,
            'chain_pulley_remarks_3' => $this->chain_pulley_remarks_3,
            'chain_pulley_remarks_4' => $this->chain_pulley_remarks_4,
            'chain_pulley_remarks_5' => $this->chain_pulley_remarks_5,
            'chain_pulley_remarks_6' => $this->chain_pulley_remarks_6,
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
