<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeInfo extends Model
{
    use HasFactory;
    protected $fillable = [
            'name',
            'designation',
            'department',
            'employee_type',
        ];
        public function assignTrainings()
        {
            return $this->hasMany(AssignTraining::class, 'employee_id');
        }
        
        public function assignSpecialTrainings()
        {
            return $this->hasMany(AssignSpecialTraining::class, 'employee_id');
        }
}
