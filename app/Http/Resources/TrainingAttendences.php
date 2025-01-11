<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TrainingAttendences extends JsonResource
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
            'serial_number' => $this->serial_number,
            'training_topic_id' => $this->training_topic_id,
            'iso_standard' => $this->iso_standard,
            'venue' => $this->venue,
            'facilitator' => $this->facilitator,
            'training_date' => $this->training_date,
            'training_duration' => $this->training_duration,
            'name' => $this->name,
            'title' => $this->title,
            'function' => $this->function,
            'business' => $this->business,
            'signature' => $this->signature,
        ];
    }
}
