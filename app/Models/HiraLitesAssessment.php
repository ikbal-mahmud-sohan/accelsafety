<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HiraLitesAssessment extends Model
{
    //
   protected $fillable=[
       'site_location',
       'activity_or_task',
       'risk_assessment_conducted_by',
       'date_conducted',
       'process_owner_or_department',
       'next_review_date',
   ];
}
