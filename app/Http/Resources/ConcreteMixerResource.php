<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConcreteMixerResource extends JsonResource
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
            'concrete_mixer_des_1' => $this->concrete_mixer_des_1,
            'concrete_mixer_des_2' => $this->concrete_mixer_des_2,
            'concrete_mixer_des_3' => $this->concrete_mixer_des_3,
            'concrete_mixer_des_4' => $this->concrete_mixer_des_4,
            'concrete_mixer_des_5' => $this->concrete_mixer_des_5,
            'concrete_mixer_des_6' => $this->concrete_mixer_des_6,
            'concrete_mixer_des_7' => $this->concrete_mixer_des_7,
            'concrete_mixer_des_8' => $this->concrete_mixer_des_8,
            'is_concrete_mixer_1' => $this->is_concrete_mixer_1,
            'is_concrete_mixer_2' => $this->is_concrete_mixer_2,
            'is_concrete_mixer_3' => $this->is_concrete_mixer_3,
            'is_concrete_mixer_4' => $this->is_concrete_mixer_4,
            'is_concrete_mixer_5' => $this->is_concrete_mixer_5,
            'is_concrete_mixer_6' => $this->is_concrete_mixer_6,
            'is_concrete_mixer_7' => $this->is_concrete_mixer_7,
            'is_concrete_mixer_8' => $this->is_concrete_mixer_8,
            'concrete_mixer_remarks_1' => $this->concrete_mixer_remarks_1,
            'concrete_mixer_remarks_2' => $this->concrete_mixer_remarks_2,
            'concrete_mixer_remarks_3' => $this->concrete_mixer_remarks_3,
            'concrete_mixer_remarks_4' => $this->concrete_mixer_remarks_4,
            'concrete_mixer_remarks_5' => $this->concrete_mixer_remarks_5,
            'concrete_mixer_remarks_6' => $this->concrete_mixer_remarks_6,
            'concrete_mixer_remarks_7' => $this->concrete_mixer_remarks_7,
            'concrete_mixer_remarks_8' => $this->concrete_mixer_remarks_8,
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
