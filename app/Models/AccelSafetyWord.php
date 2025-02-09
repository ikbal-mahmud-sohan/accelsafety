<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccelSafetyWord extends Model
{
    /** @use HasFactory<\Database\Factories\AccelSafetyWordFactory> */
    use HasFactory;
    protected $fillable = [
        'number',
        'version',
        'title',
        'records_date',
        'descriptions',
    ];
}
