<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseHarnessChecklistResource extends JsonResource
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
            'name_of_contractor' => $this->name_of_contractor,
            'checklists_date' => $this->checklists_date,
            'report_no' => $this->report_no,
            'locations' => $this->locations,
            'project_name' => $this->project_name,
            'harness_no' => $this->harness_no,
            'date_of_receipt_on_site' => $this->date_of_receipt_on_site,
            'manufacturer' => $this->manufacturer,
            'remarks' => $this->remarks,
            'contractors_representative_name' => $this->contractors_representative_name,
            'contractors_representative_signature' => $this->contractors_representative_signature,
            'contractors_representative_aproved_date' => $this->contractors_representative_aproved_date,
            'bsrm_representative_name' => $this->bsrm_representative_name,
            'bsrm_representative_signature' => $this->bsrm_representative_signature,
            'bsrm_representative_aproved_date' => $this->bsrm_representative_aproved_date,
            'harness_image_1' => $this->harness_image_1,
            'harness_is_correct_1' => $this->harness_is_correct_1,
            'harness_image_2' => $this->harness_image_2,
            'harness_is_correct_2' => $this->harness_is_correct_2,
            'harness_image_3' => $this->harness_image_3,
            'harness_is_correct_3' => $this->harness_is_correct_3,
            'harness_image_4' => $this->harness_image_4,
            'harness_is_correct_4' => $this->harness_is_correct_4,
            'harness_image_5' => $this->harness_image_5,
            'harness_is_correct_5' => $this->harness_is_correct_5,
            'harness_image_6' => $this->harness_image_6,
            'harness_is_correct_6' => $this->harness_is_correct_6,
            'harness_image_7' => $this->harness_image_7,
            'harness_is_correct_7' => $this->harness_is_correct_7,
            'harness_image_8' => $this->harness_image_8,
            'harness_is_correct_8' => $this->harness_is_correct_8,
            'harness_image_9' => $this->harness_image_9,
            'harness_is_correct_9' => $this->harness_is_correct_9,
        ];
    }
}
