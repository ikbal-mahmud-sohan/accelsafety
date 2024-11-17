<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseSafetyInspectionReportResource extends JsonResource
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
            'location' => $this->location,
            'date_of_inspection' => $this->date_of_inspection,
            'ins_reports_des_1' => $this->ins_reports_des_1,
            'ins_reports_des_2' => $this->ins_reports_des_2,
            'ins_reports_des_3' => $this->ins_reports_des_3,
            'ins_reports_des_4' => $this->ins_reports_des_4,
            'ins_reports_des_5' => $this->ins_reports_des_5,
            'ins_reports_des_6' => $this->ins_reports_des_6,
            'ins_reports_des_7' => $this->ins_reports_des_7,
            'ins_reports_des_8' => $this->ins_reports_des_8,
            'ins_reports_des_9' => $this->ins_reports_des_9,
            'ins_reports_des_10' => $this->ins_reports_des_10,
            'ins_reports_des_11' => $this->ins_reports_des_11,
            'ins_reports_des_12' => $this->ins_reports_des_12,
            'ins_reports_des_13' => $this->ins_reports_des_13,
            'ins_reports_des_remarks_1' => $this->ins_reports_des_remarks_1,
            'ins_reports_des_remarks_2' => $this->ins_reports_des_remarks_2,
            'ins_reports_des_remarks_3' => $this->ins_reports_des_remarks_3,
            'ins_reports_des_remarks_4' => $this->ins_reports_des_remarks_4,
            'ins_reports_des_remarks_5' => $this->ins_reports_des_remarks_5,
            'ins_reports_des_remarks_6' => $this->ins_reports_des_remarks_6,
            'ins_reports_des_remarks_7' => $this->ins_reports_des_remarks_7,
            'ins_reports_des_remarks_8' => $this->ins_reports_des_remarks_8,
            'ins_reports_des_remarks_9' => $this->ins_reports_des_remarks_9,
            'ins_reports_des_remarks_10' => $this->ins_reports_des_remarks_10,
            'ins_reports_des_remarks_11' => $this->ins_reports_des_remarks_11,
            'ins_reports_des_remarks_12' => $this->ins_reports_des_remarks_12,
            'ins_reports_des_remarks_13' => $this->ins_reports_des_remarks_13,
            'name_of_inspector' => $this->name_of_inspector,
            'designation' => $this->designation,
            'signature' => $this->signature,
            'approved_by' => $this->approvedBy ? new UserResource($this->approvedBy) : null,
            'updated_by' => $this->updatedBy ? new UserResource($this->updatedBy) : null,
            'created_by' => $this->createdBy ? new UserResource($this->createdBy) : null,
            'approved_date' => $this->approved_date,
        ];
    }
}
