<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeInfo extends JsonResource
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
            'emp_id' => $this->emp_id,
            'emp_email' => $this->emp_email,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'unit_name' => $this->unit_name,
            'location' => $this->location,
            'name' => $this->name,
            'designation' => $this->designation,
            'department' => $this->department,
            'employee_type' => $this->employee_type,
            ];
    }
}
