<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseEarthingPitConditionResource extends JsonResource
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
            'doc_no' => $this->doc_no,
            'issue_no' => $this->issue_no,
            'issue_date' => $this->issue_date,
            'revision_no' => $this->revision_no,
            'revision_date' => $this->revision_date,
            'equipment_details' => $this->equipment_details,
            'specification' => $this->specification,
            'last_measured_date' => $this->last_measured_date,
            'next_measuring_date' => $this->next_measuring_date,
            'check_points' => $this->check_points,
            'status' => (bool)$this->status,
        ];
    }
}
