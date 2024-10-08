<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HseListConfinedSpace extends Model
{
    use HasFactory;
    protected $fillable =[
            'confined_space_no',
            'location',
            'responsible_department',
            'image',
];
}
