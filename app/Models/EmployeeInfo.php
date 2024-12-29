<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeInfo extends Model
{
    use HasFactory;
    protected $fillable = [
            'name',
            'emp_id',
            'emp_email',
            'first_name',
            'last_name',
            'unit_name',
            'location',
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
        public function accidentInvestigation()
        {
            return $this->hasMany(AccidentInvestigation::class, 'employee_id');
        }
}

