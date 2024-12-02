<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BikeResource extends JsonResource
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
            'project_name' => $this->project_name,
            'project_code' => $this->project_code,
            'checklist_no' => $this->checklist_no,
            'date' => $this->date,
            'make' => $this->make,
            'model' => $this->model,
            'isgec' => $this->isgec,
            'hired' => $this->hired,
            'contractor' => $this->contractor,
            'bike_des_1' => $this->bike_des_1,
            'bike_des_2' => $this->bike_des_2,
            'bike_des_3' => $this->bike_des_3,
            'bike_des_4' => $this->bike_des_4,
            'bike_des_5' => $this->bike_des_5,
            'bike_des_6' => $this->bike_des_6,
            'bike_des_7' => $this->bike_des_7,
            'bike_des_8' => $this->bike_des_8,
            'bike_des_9' => $this->bike_des_9,
            'bike_des_10' => $this->bike_des_10,
            'bike_des_11' => $this->bike_des_11,
            'is_bike_1' => $this->is_bike_1,
            'is_bike_2' => $this->is_bike_2,
            'is_bike_3' => $this->is_bike_3,
            'is_bike_4' => $this->is_bike_4,
            'is_bike_5' => $this->is_bike_5,
            'is_bike_6' => $this->is_bike_6,
            'is_bike_7' => $this->is_bike_7,
            'is_bike_8' => $this->is_bike_8,
            'is_bike_9' => $this->is_bike_9,
            'is_bike_10' => $this->is_bike_10,
            'is_bike_11' => $this->is_bike_11,
            'bike_remarks_1' => $this->bike_remarks_1,
            'bike_remarks_2' => $this->bike_remarks_2,
            'bike_remarks_3' => $this->bike_remarks_3,
            'bike_remarks_4' => $this->bike_remarks_4,
            'bike_remarks_5' => $this->bike_remarks_5,
            'bike_remarks_6' => $this->bike_remarks_6,
            'bike_remarks_7' => $this->bike_remarks_7,
            'bike_remarks_8' => $this->bike_remarks_8,
            'bike_remarks_9' => $this->bike_remarks_9,
            'bike_remarks_10' => $this->bike_remarks_10,
            'bike_remarks_11' => $this->bike_remarks_11,
            'fit' => $this->fit,
            'partially_fit' => $this->partially_fit,
            'unfit' => $this->unfit,
            'checked_by' => $this->checked_by,
            'reviewed_by' => $this->reviewed_by,
            'checked_by_date' => $this->checked_by_date,
            'reviewed_by_date' => $this->reviewed_by_date,
            'checked_by_signature' => $this->checked_by_signature,
            'reviewed_by_signature' => $this->reviewed_by_signature,
            'approved_by' => $this->approved_by,
            'updated_by' => $this->updated_by,
            'created_by' => $this->created_by,
            'approved_date' => $this->approved_date,
        ];
    }
}
