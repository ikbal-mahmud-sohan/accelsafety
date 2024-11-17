<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HsePPEInspectionReport extends JsonResource
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
            'date' => $this->date,
            'time' => $this->time,
            'area' => $this->area,
            'locations' => $this->locations,
            'mandetory_ppe' => $this->mandetory_ppe,
            'employee_type' => $this->employee_type,
            'total_employee' => $this->total_employee,
            'helmet_issued' => $this->helmet_issued,
            'helmet_in_place' => $this->helmet_in_place,
            'helmet_damaged' => $this->helmet_damaged,
            'shoe_issued' => $this->shoe_issued,
            'shoe_in_place' => $this->shoe_in_place,
            'shoe_damaged' => $this->shoe_damaged,
            'gloves_issued' => $this->gloves_issued,
            'gloves_in_place' => $this->gloves_in_place,
            'gloves_damaged' => $this->gloves_damaged,
            'mask_issued' => $this->mask_issued,
            'mask_in_place' => $this->mask_in_place,
            'mask_damaged' => $this->mask_damaged,
            'googles_issued' => $this->googles_issued,
            'googles_in_place' => $this->googles_in_place,
            'googles_damaged' => $this->googles_damaged,
            'face_shield_issued' => $this->face_shield_issued,
            'face_shield_in_place' => $this->face_shield_in_place,
            'face_shield_damaged' => $this->face_shield_damaged,
            'ear_plug_issued' => $this->ear_plug_issued,
            'ear_plug_in_place' => $this->ear_plug_in_place,
            'ear_plug_damaged' => $this->ear_plug_damaged,
            'full_body_issued' => $this->full_body_issued,
            'full_body_in_place' => $this->full_body_in_place,
            'full_body_damaged' => $this->full_body_damaged,
            'action_taken_damaged_ppe' => $this->action_taken_damaged_ppe,
            'checked_by' => $this->checked_by,
            'remarks' => $this->remarks,
            'approved_by' => $this->approved_by,
            'updated_by' => $this->updated_by,
            'created_by' => $this->created_by,
            'approved_date' => $this->approved_date,
        ];
    }
}
