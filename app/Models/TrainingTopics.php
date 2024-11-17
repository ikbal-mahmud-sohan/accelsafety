<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingTopics extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        // Add any other columns that your `training_topics` table might have
    ];

    public function assignTrainings()
    {
        return $this->hasMany(AssignTraining::class, 'training_topic_id');
    }
}
