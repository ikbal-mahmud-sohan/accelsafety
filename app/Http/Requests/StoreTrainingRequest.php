<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrainingRequest extends FormRequest
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
            'serial_number' => 'required|string|max:255',
            'employee_name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'special_training_need' => 'required|string|max:255',
            'employee_type' => 'required|string|max:255',
            'status' => 'required|boolean', // Assuming status is a boolean field
            'first_training_topic' => 'nullable|string|max:255',
            'first_training_date' => 'nullable|date',
            'first_training_status' => 'nullable|string|max:255',
            'second_training_topic' => 'nullable|string|max:255',
            'second_training_date' => 'nullable|date',
            'second_training_status' => 'nullable|string|max:255',
            'third_training_topic' => 'nullable|string|max:255',
            'third_training_date' => 'nullable|date',
            'third_training_status' => 'nullable|string|max:255',
            'fourth_training_topic' => 'nullable|string|max:255',
            'fourth_training_date' => 'nullable|date',
            'fourth_training_status' => 'nullable|string|max:255',
            'fifth_training_topic' => 'nullable|string|max:255',
            'fifth_training_date' => 'nullable|date',
            'fifth_training_status' => 'nullable|string|max:255',
            'additional_resources' => 'nullable|string|max:255',
        ];
    }
}
