<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class HseSafetyChecklistHV extends Model
{
    use HasFactory;
    protected $fillable =[
        'shv_hi_pot_complied',
        'shv_hi_pot_remarks',
        'shv_cordoning_complied',
        'shv_cordoning_remarks',
        'shv_ir_before_complied',
        'shv_ir_before_remarks',
        'shv_identification_complied',
        'shv_identification_remarks',
        'shv_flashing_light_complied',
        'shv_flashing_light_remarks',
        'shv_testing_engineer_complied',
        'shv_testing_engineer_remarks',
        'shv_ensure_firm_complied',
        'shv_ensure_firm_remarks',
        'shv_leak_trip_complied',
        'shv_leak_trip_remarks',
        'shv_socket_complied',
        'shv_socket_remarks',
        'shv_discharged_complied',
        'shv_discharged_remarks',
        'shv_dc_hi',
        'shv_dc_hi',
        'checked_by',
        'reviewed_by',
        'checked_by_date',
        'reviewed_by_date',
        'checked_by_signature',
        'reviewed_by_signature',
        'approved_by',
        'updated_by',
        'created_by',
        'approved_date'
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
