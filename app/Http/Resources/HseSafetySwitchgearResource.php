<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseSafetySwitchgearResource extends JsonResource
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
