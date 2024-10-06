<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HseHarnessChecklist extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_of_contractor',
        'checklists_date',
        'report_no',
        'locations',
        'project_name',
        'harness_no',
        'date_of_receipt_on_site',
        'manufacturer',
        'remarks',
        'contractors_representative_name',
        'contractors_representative_signature',
        'contractors_representative_aproved_date',
        'bsrm_representative_name',
        'bsrm_representative_signature',
        'bsrm_representative_aproved_date',
        'harness_image_1',
        'harness_is_correct_1',
        'harness_image_2',
        'harness_is_correct_2',
        'harness_image_3',
        'harness_is_correct_3',
        'harness_image_4',
        'harness_is_correct_4',
        'harness_image_5',
        'harness_is_correct_5',
        'harness_image_6',
        'harness_is_correct_6',
        'harness_image_7',
        'harness_is_correct_7',
        'harness_image_8',
        'harness_is_correct_8',
        'harness_image_9',
        'harness_is_correct_9',
    ];


}
