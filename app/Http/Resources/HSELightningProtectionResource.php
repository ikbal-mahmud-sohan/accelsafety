<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HSELightningProtectionResource extends JsonResource
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
            'equipment_details' => $this->equipment_details,
            'lightning_protector' => $this->lightning_protector,
            'last_measured_date' => $this->last_measured_date,
            'next_measuring_date' => $this->next_measuring_date,
            'check_points' => $this->check_points,
            'status' => $this->status
        ];
    }
}
