<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignTraining extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'employee_id',
        'training_topic_id',
        'status',
        'date',
    ];

    /**
     * Get the employee associated with the assigned training.
     */
    public function employee()
    {
        return $this->belongsTo(EmployeeInfo::class, 'employee_id');
    }

    /**
     * Get the training topic associated with the assigned training.
     */
    public function trainingTopic()
    {
        return $this->belongsTo(TrainingTopics::class, 'training_topic_id');
    }
}

