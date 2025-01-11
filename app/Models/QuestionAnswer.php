<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionAnswerFactory> */
    use HasFactory;
    protected $fillable = [
        'training_topic_id', 
        'questions', 
        'answer', 
        'fake_answer_1', 
        'fake_answer_2', 
        'fake_answer_3'
    ];
    public function trainingTopic()
    {
        return $this->belongsTo(TrainingTopics::class, 'training_topic_id');
    }
}
