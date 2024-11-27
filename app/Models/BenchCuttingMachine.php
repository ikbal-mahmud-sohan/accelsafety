<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class BenchCuttingMachine extends Model
{
    /** @use HasFactory<\Database\Factories\BenchCuttingMachineFactory> */
    use HasFactory;
    protected $fillable =[
        'project_name',
        'project_code',
        'checklist_no',
        'date',
        'make',
        'model',
        'isgec',
        'bench_cutting_des_1',
        'bench_cutting_des_2',
        'bench_cutting_des_3',
        'bench_cutting_des_4',
        'bench_cutting_des_5',
        'bench_cutting_des_6',
        'bench_cutting_des_7',
        'bench_cutting_des_8',
        'bench_cutting_des_9',
        'bench_cutting_des_10',
        'is_bench_cutting_1',
        'is_bench_cutting_2',
        'is_bench_cutting_3',
        'is_bench_cutting_4',
        'is_bench_cutting_5',
        'is_bench_cutting_6',
        'is_bench_cutting_7',
        'is_bench_cutting_8',
        'is_bench_cutting_9',
        'is_bench_cutting_10',
        'bench_cutting_remarks_1',
        'bench_cutting_remarks_2',
        'bench_cutting_remarks_3',
        'bench_cutting_remarks_4',
        'bench_cutting_remarks_5',
        'bench_cutting_remarks_6',
        'bench_cutting_remarks_7',
        'bench_cutting_remarks_8',
        'bench_cutting_remarks_9',
        'bench_cutting_remarks_10',
        'fit',
        'checked_by',
        'reviewed_by',
        'checked_by_date',
        'reviewed_by_date',
        'checked_by_signature',
        'reviewed_by_signature',
        'approved_by',
        'updated_by',
        'created_by',
        'approved_date',
    ];

    protected $casts = [
        'checked_by_signature' => 'array', 
        'reviewed_by_signature' => 'array',
    ];
    
    public function approvedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
