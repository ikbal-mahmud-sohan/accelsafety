<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SafetyObservationRequest extends FormRequest
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
            'auditor' => 'required|string|max:255',
            'plant_name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'audit_date' => 'required|date',
            'category' => 'required|string|max:255',
            'problem_description' => 'required|string',
            'problematic_progressive_images' => 'sometimes|array',
            'problematic_progressive_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'root_cause' => 'required|string',
            'resp_department' => 'required|string|max:255',
            'owner_department' => 'required|string|max:255',
            'improvement_actions' => 'required|string',
            'due_date' => 'required|date',
            'priority_type' => 'required|string|max:255',
        ];
    }
}
