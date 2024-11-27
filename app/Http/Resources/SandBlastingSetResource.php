<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SandBlastingSetResource extends JsonResource
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
            'sand_blasting_des_1' => $this->sand_blasting_des_1,
            'sand_blasting_des_2' => $this->sand_blasting_des_2,
            'sand_blasting_des_3' => $this->sand_blasting_des_3,
            'sand_blasting_des_4' => $this->sand_blasting_des_4,
            'sand_blasting_des_5' => $this->sand_blasting_des_5,
            'sand_blasting_des_6' => $this->sand_blasting_des_6,
            'sand_blasting_des_7' => $this->sand_blasting_des_7,
            'sand_blasting_des_8' => $this->sand_blasting_des_8,
            'is_sand_blasting_1' => $this->is_sand_blasting_1,
            'is_sand_blasting_2' => $this->is_sand_blasting_2,
            'is_sand_blasting_3' => $this->is_sand_blasting_3,
            'is_sand_blasting_4' => $this->is_sand_blasting_4,
            'is_sand_blasting_5' => $this->is_sand_blasting_5,
            'is_sand_blasting_6' => $this->is_sand_blasting_6,
            'is_sand_blasting_7' => $this->is_sand_blasting_7,
            'is_sand_blasting_8' => $this->is_sand_blasting_8,
            'sand_blasting_remarks_1' => $this->sand_blasting_remarks_1,
            'sand_blasting_remarks_2' => $this->sand_blasting_remarks_2,
            'sand_blasting_remarks_3' => $this->sand_blasting_remarks_3,
            'sand_blasting_remarks_4' => $this->sand_blasting_remarks_4,
            'sand_blasting_remarks_5' => $this->sand_blasting_remarks_5,
            'sand_blasting_remarks_6' => $this->sand_blasting_remarks_6,
            'sand_blasting_remarks_7' => $this->sand_blasting_remarks_7,
            'sand_blasting_remarks_8' => $this->sand_blasting_remarks_8,
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
