<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstAidChecklist extends Model
{

    use HasFactory;
    protected $fillable =[
        'box_no',
        'location',
        'authorized_person',
        'contact_no',
        'reference',
        'data'
    ];
    protected $casts = [
        'data' => 'array',
    ];
}
