<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PowerDistributionPanelResource extends JsonResource
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
            'power_distribution_des_1' => $this->power_distribution_des_1,
            'power_distribution_des_2' => $this->power_distribution_des_2,
            'power_distribution_des_3' => $this->power_distribution_des_3,
            'power_distribution_des_4' => $this->power_distribution_des_4,
            'power_distribution_des_5' => $this->power_distribution_des_5,
            'power_distribution_des_6' => $this->power_distribution_des_6,
            'power_distribution_des_7' => $this->power_distribution_des_7,
            'power_distribution_des_8' => $this->power_distribution_des_8,
            'power_distribution_des_9' => $this->power_distribution_des_9,
            'power_distribution_des_10' => $this->power_distribution_des_10,
            'power_distribution_des_11' => $this->power_distribution_des_11,
            'power_distribution_des_12' => $this->power_distribution_des_12,
            'power_distribution_des_13' => $this->power_distribution_des_13,
            'power_distribution_des_14' => $this->power_distribution_des_14,
            'is_power_distribution_1' => $this->is_power_distribution_1,
            'is_power_distribution_2' => $this->is_power_distribution_2,
            'is_power_distribution_3' => $this->is_power_distribution_3,
            'is_power_distribution_4' => $this->is_power_distribution_4,
            'is_power_distribution_5' => $this->is_power_distribution_5,
            'is_power_distribution_6' => $this->is_power_distribution_6,
            'is_power_distribution_7' => $this->is_power_distribution_7,
            'is_power_distribution_8' => $this->is_power_distribution_8,
            'is_power_distribution_9' => $this->is_power_distribution_9,
            'is_power_distribution_10' => $this->is_power_distribution_10,
            'is_power_distribution_11' => $this->is_power_distribution_11,
            'is_power_distribution_12' => $this->is_power_distribution_12,
            'is_power_distribution_13' => $this->is_power_distribution_13,
            'is_power_distribution_14' => $this->is_power_distribution_14,
            'power_distribution_remarks_1' => $this->power_distribution_remarks_1,
            'power_distribution_remarks_2' => $this->power_distribution_remarks_2,
            'power_distribution_remarks_3' => $this->power_distribution_remarks_3,
            'power_distribution_remarks_4' => $this->power_distribution_remarks_4,
            'power_distribution_remarks_5' => $this->power_distribution_remarks_5,
            'power_distribution_remarks_6' => $this->power_distribution_remarks_6,
            'power_distribution_remarks_7' => $this->power_distribution_remarks_7,
            'power_distribution_remarks_8' => $this->power_distribution_remarks_8,
            'power_distribution_remarks_9' => $this->power_distribution_remarks_9,
            'power_distribution_remarks_10' => $this->power_distribution_remarks_10,
            'power_distribution_remarks_11' => $this->power_distribution_remarks_11,
            'power_distribution_remarks_12' => $this->power_distribution_remarks_12,
            'power_distribution_remarks_13' => $this->power_distribution_remarks_13,
            'power_distribution_remarks_14' => $this->power_distribution_remarks_14,
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
