<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMultipleAssignTraining extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'trainings' => 'required|array',
            'trainings.*.employee_id' => 'required|exists:employee_infos,id',
            'trainings.*.training_topic_id' => 'required|exists:training_topics,id',
            'trainings.*.status' => 'sometimes|boolean',
        ];
    }
}
