<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseChemicalRegisterResource extends JsonResource
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
            'material_name' => $this->material_name,
            'appearance' => $this->appearance,
            'uom' => $this->uom,
            'weight' => $this->weight,
            'user_dept' => $this->user_dept,
            'hazard_symbols' => $this->hazard_symbols,
            'hazard_statement' => $this->hazard_statement,
            'physical_hazards' => $this->physical_hazards,
            'disposal_procedure' => $this->disposal_procedure,
            'fire_rating' => $this->fire_rating,
            'msds_available' => (bool)$this->msds_available,
            'remarks' => $this->remarks,
        ];
    }
}
