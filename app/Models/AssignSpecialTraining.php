<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignSpecialTraining extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'special_training',
        'status',
    ];

    /**
     * Get the employee that this special training is assigned to.
     */
    public function employee()
    {
        return $this->belongsTo(EmployeeInfo::class);
    }
}
