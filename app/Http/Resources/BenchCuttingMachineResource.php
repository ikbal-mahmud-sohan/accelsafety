<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BenchCuttingMachineResource extends JsonResource
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
            'bench_cutting_des_1' => $this->bench_cutting_des_1,
            'bench_cutting_des_2' => $this->bench_cutting_des_2,
            'bench_cutting_des_3' => $this->bench_cutting_des_3,
            'bench_cutting_des_4' => $this->bench_cutting_des_4,
            'bench_cutting_des_5' => $this->bench_cutting_des_5,
            'bench_cutting_des_6' => $this->bench_cutting_des_6,
            'bench_cutting_des_7' => $this->bench_cutting_des_7,
            'bench_cutting_des_8' => $this->bench_cutting_des_8,
            'bench_cutting_des_9' => $this->bench_cutting_des_9,
            'bench_cutting_des_10' => $this->bench_cutting_des_10,
            'is_bench_cutting_1' => $this->is_bench_cutting_1,
            'is_bench_cutting_2' => $this->is_bench_cutting_2,
            'is_bench_cutting_3' => $this->is_bench_cutting_3,
            'is_bench_cutting_4' => $this->is_bench_cutting_4,
            'is_bench_cutting_5' => $this->is_bench_cutting_5,
            'is_bench_cutting_6' => $this->is_bench_cutting_6,
            'is_bench_cutting_7' => $this->is_bench_cutting_7,
            'is_bench_cutting_8' => $this->is_bench_cutting_8,
            'is_bench_cutting_9' => $this->is_bench_cutting_9,
            'is_bench_cutting_10' => $this->is_bench_cutting_10,
            'bench_cutting_remarks_1' => $this->bench_cutting_remarks_1,
            'bench_cutting_remarks_2' => $this->bench_cutting_remarks_2,
            'bench_cutting_remarks_3' => $this->bench_cutting_remarks_3,
            'bench_cutting_remarks_4' => $this->bench_cutting_remarks_4,
            'bench_cutting_remarks_5' => $this->bench_cutting_remarks_5,
            'bench_cutting_remarks_6' => $this->bench_cutting_remarks_6,
            'bench_cutting_remarks_7' => $this->bench_cutting_remarks_7,
            'bench_cutting_remarks_8' => $this->bench_cutting_remarks_8,
            'bench_cutting_remarks_9' => $this->bench_cutting_remarks_9,
            'bench_cutting_remarks_10' => $this->bench_cutting_remarks_10,
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
