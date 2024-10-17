<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseJobSafetyAnalysisPPEResource extends JsonResource
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
            'issue_date' => $this->issue_date,
            'issue_no' => $this->issue_no,
            'revision_date' => $this->revision_date,
            'revision_no' => $this->revision_no,
            'jsa_id' => $this->jsa_id,
            'process' => $this->process,
            'activity' => $this->activity,
            'task' => $this->task,
            'hazards' => $this->hazards,
            'controls' => $this->controls,
            'ppe' => $this->ppe,
            'recommended_trainings' => $this->recommended_trainings
        ];
    }
}
