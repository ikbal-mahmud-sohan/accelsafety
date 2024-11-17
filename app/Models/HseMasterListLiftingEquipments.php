<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class HseMasterListLiftingEquipments extends Model
{
    use HasFactory;
    protected $table = 'hse_lifting_equipments';
    protected $fillable =[
            'location',
            'name_of_equipment',
            'specification',
            'capacity_ton',
            'safe_working_load',
            'last_inspection_done_on',
            'last_load_done_on',
            'agency',
            'status',
            'remarks',
            'approved_by',
            'updated_by',
            'created_by',
            'approved_date',
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
