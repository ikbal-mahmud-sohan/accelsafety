<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubmitAnswer extends Model
{
    /** @use HasFactory<\Database\Factories\UserSubmitAnswerFactory> */
    use HasFactory;

    protected $fillable = [
        'training_topic_id',
        'emp_id',
        'question_answers',
        'score',
    ];

    protected $casts = [
        'question_answers' => 'array', // Automatically cast question_answers to an array
    ];
    
    public function employeeInfo()
    {
        return $this->belongsTo(EmployeeInfo::class, 'emp_id', 'emp_id');
    }
}

