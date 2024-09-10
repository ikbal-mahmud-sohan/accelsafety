<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestPurpose extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'radio1',
        'radio2',
        'image1',
        'image2'
        ];
        protected $casts = [
            'radio1' => 'array', 
            'radio2' => 'array',
            'image1' => 'array',
            'image2' => 'array',
        ];
}
