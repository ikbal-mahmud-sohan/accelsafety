<?php

namespace App\Http\Controllers;

use App\Models\QuestionAnswer;
use App\Models\TrainingTopics;
use App\Models\UserSubmitAnswer;
use Illuminate\Http\Request;

class UserSubmitAnswerController extends Controller
{

    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $sortBy = $request->get('order_by', 'id'); // Default sort field
        $sortOrder = $request->get('sort_by', 'asc'); // Default sort order

        // Base query with relations
        $query = UserSubmitAnswer::query()->with(['employeeInfo', 'trainingTopic']);

        // Apply search across model fields & related models
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                //  Search by training_topic_id
                $q->where('training_topic_id', 'like', "%$search%");
                $q->where('emp_id', 'like', "%$search%");

                // Search in question_answers JSON field (both keys & values)
                $q->orWhere(function ($subQuery) use ($search) {
                    $subQuery->whereJsonContains('question_answers', [$search])
                        ->orWhere('question_answers', 'like', "%$search%");
                });

                // Search in related 'employeeInfo' relation (name field)
                $q->orWhereHas('employeeInfo', function ($employeeQuery) use ($search) {
                    $employeeQuery->where('name', 'like', "%$search%");
                });

                // Search in related 'trainingTopic' relation (name field)
                $q->orWhereHas('trainingTopic', function ($trainingQuery) use ($search) {
                    $trainingQuery->where('name', 'like', "%$search%");
                });
            });
        }
        // Sorting logic
        $validSortFields = [
            'id', 'training_topic_id', 'questions', 'answer',
            'fake_answer_1', 'fake_answer_2', 'fake_answer_3',
            'created_at', 'updated_at'
        ];
        if (in_array($sortBy, $validSortFields)) {
            $query->orderBy($sortBy, $sortOrder);
        } elseif ($sortBy === 'employee_name') {
            // Sort by employeeInfo name
            $query->join('employees', 'user_submit_answers.employee_id', '=', 'employees.id')
                ->orderBy('employees.name', $sortOrder)
                ->select('user_submit_answers.*'); // Avoid column conflicts
        } elseif ($sortBy === 'training_topic_name') {
            // Sort by trainingTopic name
            $query->join('training_topics', 'user_submit_answers.training_topic_id', '=', 'training_topics.id')
                ->orderBy('training_topics.name', $sortOrder)
                ->select('user_submit_answers.*');
        }

        // Pagination
        $total = $query->count();
        $submissions = $query->skip(($currentPage - 1) * $perPage)->take($perPage)->get();

        return response()->json([
            'data' => $submissions,
            'total_count' => $total,
            'current_page' => $currentPage,
            'per_page' => $perPage,
            'last_page' => ceil($total / $perPage),
        ]);
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
