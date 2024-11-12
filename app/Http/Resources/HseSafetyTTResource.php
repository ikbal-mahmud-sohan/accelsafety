<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseSafetyTTResource extends JsonResource
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
            'stt_1_complied' => $this->stt_1_complied,
            'stt_1_remarks' => $this->stt_1_remarks,
            'stt_2_complied' => $this->stt_2_complied,
            'stt_2_remarks' => $this->stt_2_remarks,
            'stt_3_complied' => $this->stt_3_complied,
            'stt_3_remarks' => $this->stt_3_remarks,
            'stt_4_complied' => $this->stt_4_complied,
            'stt_4_remarks' => $this->stt_4_remarks,
            'stt_5_complied' => $this->stt_5_complied,
            'stt_5_remarks' => $this->stt_5_remarks,
            'stt_6_complied' => $this->stt_6_complied,
            'stt_6_remarks' => $this->stt_6_remarks,
            'stt_7_complied' => $this->stt_7_complied,
            'stt_7_remarks' => $this->stt_7_remarks,
            'stt_8_complied' => $this->stt_8_complied,
            'stt_8_remarks' => $this->stt_8_remarks,
            'stt_9_complied' => $this->stt_9_complied,
            'stt_9_remarks' => $this->stt_9_remarks,
            'stt_10_complied' => $this->stt_10_complied,
            'stt_10_remarks' => $this->stt_10_remarks,
            'stt_11_complied' => $this->stt_11_complied,
            'stt_11_remarks' => $this->stt_11_remarks,
            'stt_12_complied' => $this->stt_12_complied,
            'stt_12_remarks' => $this->stt_12_remarks,
            'stt_13_complied' => $this->stt_13_complied,
            'stt_13_remarks' => $this->stt_13_remarks,
            'stt_14_complied' => $this->stt_14_complied,
            'stt_14_remarks' => $this->stt_14_remarks,
            'stt_15_complied' => $this->stt_15_complied,
            'stt_15_remarks' => $this->stt_15_remarks,
            'stt_16_complied' => $this->stt_16_complied,
            'stt_16_remarks' => $this->stt_16_remarks,
            'stt_1_descriptions' => $this->stt_1_descriptions,
            'stt_2_descriptions' => $this->stt_2_descriptions,
            'stt_3_descriptions' => $this->stt_3_descriptions,
            'stt_4_descriptions' => $this->stt_4_descriptions,
            'stt_5_descriptions' => $this->stt_5_descriptions,
            'stt_6_descriptions' => $this->stt_6_descriptions,
            'stt_7_descriptions' => $this->stt_7_descriptions,
            'stt_8_descriptions' => $this->stt_8_descriptions,
            'stt_9_descriptions' => $this->stt_9_descriptions,
            'stt_10_descriptions' => $this->stt_10_descriptions,
            'stt_11_descriptions' => $this->stt_11_descriptions,
            'stt_12_descriptions' => $this->stt_12_descriptions,
            'stt_13_descriptions' => $this->stt_13_descriptions,
            'stt_14_descriptions' => $this->stt_14_descriptions,
            'stt_15_descriptions' => $this->stt_15_descriptions,
            'stt_16_descriptions' => $this->stt_16_descriptions,
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
