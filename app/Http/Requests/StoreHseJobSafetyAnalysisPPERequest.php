<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseJobSafetyAnalysisPPERequest extends FormRequest
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
            'issue_date' =>'required|string|max:255',
            'issue_no' =>'required|string|max:255',
            'revision_date' =>'required|string|max:255',
            'revision_no' =>'required|string|max:255',
            'jsa_id' =>'required|string|max:255',
            'process' =>'required|string|max:255',
            'activity' =>'required|string|max:255',
            'task' =>'required|string|max:255',
            'hazards' =>'required|string|max:255',
            'controls' =>'required|string|max:255',
            'ppe' =>'required|string|max:255',
            'recommended_trainings' =>'required|string|max:255',
        ];
    }
}
