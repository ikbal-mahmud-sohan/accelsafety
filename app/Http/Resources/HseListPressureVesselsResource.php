<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseListPressureVesselsResource extends JsonResource
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
            'vessel_type' => $this->vessel_type,
            'purpose' => $this->purpose,
            'medium' => $this->medium,
            'location' => $this->location,
            'capacity_m3' => $this->capacity_m3,
            'quantity_nos' => $this->quantity_nos,
            'working_pressure_bar' => $this->working_pressure_bar,
            'relief_valve' => $this->relief_valve,
            'prv_set_point_bar' => $this->prv_set_point_bar,
            'last_hydro' => $this->last_hydro,
            'remarks' => $this->remarks,
        ];
    }
}
