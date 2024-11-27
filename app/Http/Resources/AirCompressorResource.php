<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AirCompressorResource extends JsonResource
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
            'air_compressor_des_1' => $this->air_compressor_des_1,
            'air_compressor_des_2' => $this->air_compressor_des_2,
            'air_compressor_des_3' => $this->air_compressor_des_3,
            'air_compressor_des_4' => $this->air_compressor_des_4,
            'air_compressor_des_5' => $this->air_compressor_des_5,
            'air_compressor_des_6' => $this->air_compressor_des_6,
            'air_compressor_des_7' => $this->air_compressor_des_7,
            'air_compressor_des_8' => $this->air_compressor_des_8,
            'air_compressor_des_9' => $this->air_compressor_des_9,
            'air_compressor_des_10' => $this->air_compressor_des_10,
            'air_compressor_des_11' => $this->air_compressor_des_11,
            'air_compressor_des_12' => $this->air_compressor_des_12,
            'is_air_compressor_1' => $this->is_air_compressor_1,
            'is_air_compressor_2' => $this->is_air_compressor_2,
            'is_air_compressor_3' => $this->is_air_compressor_3,
            'is_air_compressor_4' => $this->is_air_compressor_4,
            'is_air_compressor_5' => $this->is_air_compressor_5,
            'is_air_compressor_6' => $this->is_air_compressor_6,
            'is_air_compressor_7' => $this->is_air_compressor_7,
            'is_air_compressor_8' => $this->is_air_compressor_8,
            'is_air_compressor_9' => $this->is_air_compressor_9,
            'is_air_compressor_10' => $this->is_air_compressor_10,
            'is_air_compressor_11' => $this->is_air_compressor_11,
            'is_air_compressor_12' => $this->is_air_compressor_12,
            'air_compressor_remarks_1' => $this->air_compressor_remarks_1,
            'air_compressor_remarks_2' => $this->air_compressor_remarks_2,
            'air_compressor_remarks_3' => $this->air_compressor_remarks_3,
            'air_compressor_remarks_4' => $this->air_compressor_remarks_4,
            'air_compressor_remarks_5' => $this->air_compressor_remarks_5,
            'air_compressor_remarks_6' => $this->air_compressor_remarks_6,
            'air_compressor_remarks_7' => $this->air_compressor_remarks_7,
            'air_compressor_remarks_8' => $this->air_compressor_remarks_8,
            'air_compressor_remarks_9' => $this->air_compressor_remarks_9,
            'air_compressor_remarks_10' => $this->air_compressor_remarks_10,
            'air_compressor_remarks_11' => $this->air_compressor_remarks_11,
            'air_compressor_remarks_12' => $this->air_compressor_remarks_12,
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
