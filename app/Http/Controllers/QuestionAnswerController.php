<?php

namespace App\Http\Controllers;

use App\Models\QuestionAnswer;
use Illuminate\Http\Request;

class QuestionAnswerController extends Controller
{
    
    public function index()
    {
        $questionAnswers = QuestionAnswer::all();
        return response()->json($questionAnswers);
    }
    public function ListByTrainingTopicID($trainingTopicId)
    {
        $questionAnswers = QuestionAnswer::where('training_topic_id', $trainingTopicId)->get();
        return response()->json($questionAnswers);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'training_topic_id' => 'required|string',
            'questions' => 'required|string',
            'answer' => 'required|string',
            'fake_answer_1' => 'required|string',
            'fake_answer_2' => 'required|string',
            'fake_answer_3' => 'required|string',
        ]);

        $questionAnswer = QuestionAnswer::create([
            'training_topic_id' => $validated['training_topic_id'],
            'questions' => $validated['questions'],
            'answer' => $validated['answer'],
            'fake_answer_1' => $validated['fake_answer_1'],
            'fake_answer_2' => $validated['fake_answer_2'],
            'fake_answer_3' => $validated['fake_answer_3'],
        ]);

        return response()->json($questionAnswer, 201);
    }

    public function show(QuestionAnswer $questionAnswer)
    {
        return response()->json($questionAnswer);
    }

    public function ListByTraining($trainingTopicId)
    {
        $questionAnswers = QuestionAnswer::where('training_topic_id', $trainingTopicId)->get();

        // Transform the data
        $formattedAnswers = $questionAnswers->map(function ($questionAnswer) {
            return [
                'id' => $questionAnswer->id,
                'training_topic_id' => $questionAnswer->training_topic_id,
                'questions' => $questionAnswer->questions,
                'choices' => [
                    'choice_1' => $questionAnswer->answer,
                    'choice_2' => $questionAnswer->fake_answer_1,
                    'choice_3' => $questionAnswer->fake_answer_2,
                    'choice_4' => $questionAnswer->fake_answer_3,
                ],
                'created_at' => $questionAnswer->created_at,
                'updated_at' => $questionAnswer->updated_at,
            ];
        });

        return response()->json($formattedAnswers);
    }

    public function update(Request $request, QuestionAnswer $questionAnswer)
    {
        $validated = $request->validate([
            'questions' => 'required|string',
            'answer' => 'required|string',
            'fake_answer_1' => 'required|string',
            'fake_answer_2' => 'required|string',
            'fake_answer_3' => 'required|string',
        ]);

        // Update the QuestionAnswer record
        $questionAnswer->update([
            'questions' => $validated['questions'],
            'answer' => $validated['answer'],
            'fake_answer_1' => $validated['fake_answer_1'],
            'fake_answer_2' => $validated['fake_answer_2'],
            'fake_answer_3' => $validated['fake_answer_3'],
        ]);

        return response()->json($questionAnswer);
    }

    public function destroy(QuestionAnswer $questionAnswer)
    {
        $questionAnswer->delete();
        $questionAnswers = QuestionAnswer::all();
        return response()->json($questionAnswers);
    }
   
}
