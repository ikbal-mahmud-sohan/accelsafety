<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseOHSMSFormResource extends JsonResource
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
            'factory_name' => $this->factory_name,
            'date' => $this->date,
            'location' => $this->location,
            'ohsmsf_sign_1' => $this->ohsmsf_sign_1,
            'ohsmsf_sign_2' => $this->ohsmsf_sign_2,
            'ohsmsf_sign_3' => $this->ohsmsf_sign_3,
            'ohsmsf_sign_4' => $this->ohsmsf_sign_4,
            'ohsmsf_sign_5' => $this->ohsmsf_sign_5,
            'ohsmsf_sign_6' => $this->ohsmsf_sign_6,
            'ohsmsf_sign_7' => $this->ohsmsf_sign_7,
            'ohsmsf_sign_8' => $this->ohsmsf_sign_8,
            'ohsmsf_sign_9' => $this->ohsmsf_sign_9,
            'ohsmsf_sign_10' => $this->ohsmsf_sign_10,
            'ohsmsf_sign_11' => $this->ohsmsf_sign_11,
            'ohsmsf_sign_12' => $this->ohsmsf_sign_12,
            'ohsmsf_sign_13' => $this->ohsmsf_sign_13,
            'ohsmsf_sign_14' => $this->ohsmsf_sign_14,
            'ohsmsf_sign_15' => $this->ohsmsf_sign_15,
            'approved_by' => $this->approved_by,
            'updated_by' => $this->updated_by,
            'created_by' => $this->created_by,
            'approved_date' => $this->approved_date,
        ];
    }
}
