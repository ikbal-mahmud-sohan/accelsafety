<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HseIncidentNotification extends Model
{
    use HasFactory;

    protected $fillable =[
        'shift_incharge_facility_name',
        'shift_incharge_date_of_incident',
        'shift_incharge_time',
        'shift_incharge_shift',
        'shift_incharge_location_of_incident',
        'involved_party_name',
        'involved_party_department',
        'involved_party_job_title',
        'involved_party_property_damaged',
        'involved_party_employee_id',
        'involved_party_age',
        'involved_party_mobile_no',
        'involved_party_property_name',
        'involved_party_adress',
        'involved_party_approximate_cost',
        'brief_description',
        'immediate_action_taken',
        'name_of_shift_in_charge',
        'name_of_shift_in_charge_mobile',
        'list_of_witness_name_1',
        'list_of_witness_designation_1',
        'list_of_witness_phone_number_1',
        'list_of_witness_name_2',
        'list_of_witness_designation_2',
        'list_of_witness_phone_number_2',
        'comment_if_any',
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
