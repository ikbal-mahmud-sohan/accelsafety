<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PortableGrinderResource extends JsonResource
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
            'portable_grinder_des_1' => $this->portable_grinder_des_1,
            'portable_grinder_des_2' => $this->portable_grinder_des_2,
            'portable_grinder_des_3' => $this->portable_grinder_des_3,
            'portable_grinder_des_4' => $this->portable_grinder_des_4,
            'portable_grinder_des_5' => $this->portable_grinder_des_5,
            'portable_grinder_des_6' => $this->portable_grinder_des_6,
            'portable_grinder_des_7' => $this->portable_grinder_des_7,
            'portable_grinder_des_8' => $this->portable_grinder_des_8,
            'portable_grinder_des_9' => $this->portable_grinder_des_9,
            'portable_grinder_des_10' => $this->portable_grinder_des_10,
            'portable_grinder_des_11' => $this->portable_grinder_des_11,
            'portable_grinder_des_12' => $this->portable_grinder_des_12,
            'is_portable_grinder_1' => $this->is_portable_grinder_1,
            'is_portable_grinder_2' => $this->is_portable_grinder_2,
            'is_portable_grinder_3' => $this->is_portable_grinder_3,
            'is_portable_grinder_4' => $this->is_portable_grinder_4,
            'is_portable_grinder_5' => $this->is_portable_grinder_5,
            'is_portable_grinder_6' => $this->is_portable_grinder_6,
            'is_portable_grinder_7' => $this->is_portable_grinder_7,
            'is_portable_grinder_8' => $this->is_portable_grinder_8,
            'is_portable_grinder_9' => $this->is_portable_grinder_9,
            'is_portable_grinder_10' => $this->is_portable_grinder_10,
            'is_portable_grinder_11' => $this->is_portable_grinder_11,
            'is_portable_grinder_12' => $this->is_portable_grinder_12,
            'portable_grinder_remarks_1' => $this->portable_grinder_remarks_1,
            'portable_grinder_remarks_2' => $this->portable_grinder_remarks_2,
            'portable_grinder_remarks_3' => $this->portable_grinder_remarks_3,
            'portable_grinder_remarks_4' => $this->portable_grinder_remarks_4,
            'portable_grinder_remarks_5' => $this->portable_grinder_remarks_5,
            'portable_grinder_remarks_6' => $this->portable_grinder_remarks_6,
            'portable_grinder_remarks_7' => $this->portable_grinder_remarks_7,
            'portable_grinder_remarks_8' => $this->portable_grinder_remarks_8,
            'portable_grinder_remarks_9' => $this->portable_grinder_remarks_9,
            'portable_grinder_remarks_10' => $this->portable_grinder_remarks_10,
            'portable_grinder_remarks_11' => $this->portable_grinder_remarks_11,
            'portable_grinder_remarks_12' => $this->portable_grinder_remarks_12,
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
