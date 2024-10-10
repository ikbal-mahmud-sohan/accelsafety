<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseSafetyChecklistHVResource extends JsonResource
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
            'shv_hi_pot_complied' => $this->shv_hi_pot_complied,
            'shv_hi_pot_remarks' => $this->shv_hi_pot_remarks,
            'shv_cordoning_complied' => $this->shv_cordoning_complied,
            'shv_cordoning_remarks' => $this->shv_cordoning_remarks,
            'shv_ir_before_complied' => $this->shv_ir_before_complied,
            'shv_ir_before_remarks' => $this->shv_ir_before_remarks,
            'shv_identification_complied' => $this->shv_identification_complied,
            'shv_identification_remarks' => $this->shv_identification_remarks,
            'shv_flashing_light_complied' => $this->shv_flashing_light_complied,
            'shv_flashing_light_remarks' => $this->shv_flashing_light_remarks,
            'shv_testing_engineer_complied' => $this->shv_testing_engineer_complied,
            'shv_testing_engineer_remarks' => $this->shv_testing_engineer_remarks,
            'shv_ensure_firm_complied' => $this->shv_ensure_firm_complied,
            'shv_ensure_firm_remarks' => $this->shv_ensure_firm_remarks,
            'shv_leak_trip_complied' => $this->shv_leak_trip_complied,
            'shv_leak_trip_remarks' => $this->shv_leak_trip_remarks,
            'shv_socket_complied' => $this->shv_socket_complied,
            'shv_socket_remarks' => $this->shv_socket_remarks,
            'shv_discharged_complied' => $this->shv_discharged_complied,
            'shv_discharged_remarks' => $this->shv_discharged_remarks,
            'shv_dc_hi' => $this->shv_dc_hi,
            'shv_dc_hi' => $this->shv_dc_hi,
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
