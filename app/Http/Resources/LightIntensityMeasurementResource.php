<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LightIntensityMeasurementResource extends JsonResource
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
            'area' => $this->area,
            'location' => $this->location,
            'location_id' => $this->location_id,
            'day_time_reading_lux' => $this->day_time_reading_lux,
            'night_time_reading_lux' => $this->night_time_reading_lux,
            'date_of_test' => $this->date_of_test,
            'day_time_350_lux' => $this->day_time_350_lux,
            'night_time_350_lux' => $this->night_time_350_lux,
            'remarks' => $this->remarks,
            'approved_by' => $this->approved_by,
            'updated_by' => $this->updated_by,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
