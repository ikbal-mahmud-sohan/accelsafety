<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class HseAccidentNotification extends Model
{
    use HasFactory;
    protected $fillable =[
        'plant_name',
        'date_of_accident',
        'shift',
        'location_of_accident',
        'pn_time',
        'no_of_people_injured',
        'nature_of_accident',
        'injured_party_name',
        'injured_party_address',
        'injured_party_job_title',
        'injured_party_mobile_no',
        'injured_party_victim_type',
        'injured_party_effected_body',
        'injured_party_department',
        'injured_party_age',
        'injured_party_type_Injury',
        'brief_description_of_incident',
        'action_first_Aid_hospitalization',
        'name_of_shift_in_charge',
        'injured_party_designation',
        'injured_party_mobile',
        'approved_by',
        'updated_by',
        'created_by',
        'approved_date'
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
