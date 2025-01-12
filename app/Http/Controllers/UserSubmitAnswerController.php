<?php

namespace App\Http\Controllers;

use App\Models\QuestionAnswer;
use App\Models\TrainingTopics;
use App\Models\UserSubmitAnswer;
use Illuminate\Http\Request;

class UserSubmitAnswerController extends Controller
{
    
    public function index()
    {
        $submissions = UserSubmitAnswer::all();

        return response()->json($submissions);
    }

    public function store(Request $request)
    {
            $validated = $request->validate([
                'emp_id' => 'required|exists:employee_infos,emp_id',
                'training_topic_id' => 'required|exists:training_topics,id',
                'question_answers' => 'required|array',
            ]);

            $score = 0.0;

            $questionAnswers = QuestionAnswer::where('training_topic_id', $validated['training_topic_id'])->get();

            foreach ($validated['question_answers'] as $question => $submittedAnswer) {
                $correctAnswer = $questionAnswers->where('questions', $question)->first();

                if ($correctAnswer && strtolower($correctAnswer->answer) == strtolower($submittedAnswer)) {
                   
                    $score += 5.0;
                }
            }

            $submission = UserSubmitAnswer::create([
                'emp_id' => $validated['emp_id'],
                'training_topic_id' => $validated['training_topic_id'],
                'question_answers' => json_encode($validated['question_answers']),
                'score' => $score, 
            ]);

            return response()->json([
                'message' => 'Submission created successfully!',
                'data' => $submission,
                'score' => $score,
            ], 201);
    }

    public function show(UserSubmitAnswer $userSubmitAnswer)
    {
        $submission = UserSubmitAnswer::find($userSubmitAnswer);

        if (!$submission) {
            return response()->json([
                'message' => 'Submission not found!'
            ], 404);
        }

        return response()->json($submission);
    }

    public function destroy(UserSubmitAnswer $userSubmitAnswer)
    {
        $submission = UserSubmitAnswer::find($userSubmitAnswer);

        if (!$submission) {
            return response()->json([
                'message' => 'Submission not found!'
            ], 404);
        }

        // Delete submission
        $submission->delete();

        return response()->json([
            'message' => 'Submission deleted successfully!'
        ]);
    }
}
