<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PPEDistributionRegisterResource extends JsonResource
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
            'name' => $this->name,
            'contractor_name' => $this->contractor_name,
            'process' => $this->process,
            'ppe' => $this->ppe,
            'quantity' => $this->quantity,
            'date_of_issue' => $this->date_of_issue,
            'date_of_return' => $this->date_of_return,
            'receiver_signature' => $this->receiver_signature,
            'remarks' => $this->remarks,
            'approved_by' => $this->approved_by,
            'updated_by' => $this->updated_by,
            'created_by' => $this->created_by,
            'approved_date' => $this->approved_date,
        ];
    }
}
