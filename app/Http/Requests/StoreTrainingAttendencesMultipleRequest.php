<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrainingAttendencesMultipleRequest extends FormRequest
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
            'training_topic_id' => 'required|exists:training_topics,id',
            'iso_standard' => 'required|string|max:255',
            'venue' => 'required|string|max:255',
            'facilitator' => 'required|string|max:255',
            'training_date' => 'required|date',
            'training_duration' => 'required|string|max:255',
            'emp_id' => 'required|array',
            'title' => 'required|string|max:255',
            'function' => 'required|string|max:255',
            'business' => 'required|string|max:255',
            'signature' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
