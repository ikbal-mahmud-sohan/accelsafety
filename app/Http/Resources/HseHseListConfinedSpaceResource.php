<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HseHseListConfinedSpaceResource extends JsonResource
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
            'confined_space_no' => $this->confined_space_no,
            'location' => $this->location,
            'responsible_department' => $this->responsible_department,
            'image' => $this->image,
        ];
    }
}
