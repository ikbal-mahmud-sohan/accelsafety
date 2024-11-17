<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransitMixerResource extends JsonResource
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
            'transit_mixer_des_1' => $this->transit_mixer_des_1,
            'transit_mixer_des_2' => $this->transit_mixer_des_2,
            'transit_mixer_des_3' => $this->transit_mixer_des_3,
            'transit_mixer_des_4' => $this->transit_mixer_des_4,
            'transit_mixer_des_5' => $this->transit_mixer_des_5,
            'transit_mixer_des_6' => $this->transit_mixer_des_6,
            'transit_mixer_des_7' => $this->transit_mixer_des_7,
            'transit_mixer_des_8' => $this->transit_mixer_des_8,
            'transit_mixer_des_9' => $this->transit_mixer_des_9,
            'transit_mixer_des_10' => $this->transit_mixer_des_10,
            'transit_mixer_des_11' => $this->transit_mixer_des_11,
            'transit_mixer_des_12' => $this->transit_mixer_des_12,
            'transit_mixer_des_13' => $this->transit_mixer_des_13,
            'transit_mixer_des_14' => $this->transit_mixer_des_14,
            'transit_mixer_des_15' => $this->transit_mixer_des_15,
            'transit_mixer_des_16' => $this->transit_mixer_des_16,
            'is_transit_mixer_1' => $this->is_transit_mixer_1,
            'is_transit_mixer_2' => $this->is_transit_mixer_2,
            'is_transit_mixer_3' => $this->is_transit_mixer_3,
            'is_transit_mixer_4' => $this->is_transit_mixer_4,
            'is_transit_mixer_5' => $this->is_transit_mixer_5,
            'is_transit_mixer_6' => $this->is_transit_mixer_6,
            'is_transit_mixer_7' => $this->is_transit_mixer_7,
            'is_transit_mixer_8' => $this->is_transit_mixer_8,
            'is_transit_mixer_9' => $this->is_transit_mixer_9,
            'is_transit_mixer_10' => $this->is_transit_mixer_10,
            'is_transit_mixer_11' => $this->is_transit_mixer_11,
            'is_transit_mixer_12' => $this->is_transit_mixer_12,
            'is_transit_mixer_13' => $this->is_transit_mixer_13,
            'is_transit_mixer_14' => $this->is_transit_mixer_14,
            'is_transit_mixer_15' => $this->is_transit_mixer_15,
            'is_transit_mixer_16' => $this->is_transit_mixer_16,
            'transit_mixer_remarks_1' => $this->transit_mixer_remarks_1,
            'transit_mixer_remarks_2' => $this->transit_mixer_remarks_2,
            'transit_mixer_remarks_3' => $this->transit_mixer_remarks_3,
            'transit_mixer_remarks_4' => $this->transit_mixer_remarks_4,
            'transit_mixer_remarks_5' => $this->transit_mixer_remarks_5,
            'transit_mixer_remarks_6' => $this->transit_mixer_remarks_6,
            'transit_mixer_remarks_7' => $this->transit_mixer_remarks_7,
            'transit_mixer_remarks_8' => $this->transit_mixer_remarks_8,
            'transit_mixer_remarks_9' => $this->transit_mixer_remarks_9,
            'transit_mixer_remarks_10' => $this->transit_mixer_remarks_10,
            'transit_mixer_remarks_11' => $this->transit_mixer_remarks_11,
            'transit_mixer_remarks_12' => $this->transit_mixer_remarks_12,
            'transit_mixer_remarks_13' => $this->transit_mixer_remarks_13,
            'transit_mixer_remarks_14' => $this->transit_mixer_remarks_14,
            'transit_mixer_remarks_15' => $this->transit_mixer_remarks_15,
            'transit_mixer_remarks_16' => $this->transit_mixer_remarks_16,
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
