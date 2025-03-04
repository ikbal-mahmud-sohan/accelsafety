<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitorEntry extends Model
{
    protected $fillable = [
        'unit_name',
        'visitor_name',
        'company_name',
        'whom_to_meet',
        'visit_purpose',
        'temp_id_card_no',
        'time_of_entry',
        'time_of_exit',
        'signature',
    ];
}
