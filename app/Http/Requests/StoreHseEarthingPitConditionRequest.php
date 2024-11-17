<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseEarthingPitConditionRequest extends FormRequest
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
            'doc_no' => 'required|string|max:255',
            'issue_no' => 'required|string|max:255',
            'issue_date' => 'required|string|max:255',
            'revision_no' => 'required|string|max:255',
            'revision_date' => 'required|string|max:255',
            'equipment_details' => 'required|string|max:255',
            'specification' => 'required|string|max:255',
            'last_measured_date' => 'required|string|max:255',
            'next_measuring_date' => 'required|string|max:255',
            'check_points' => 'required|string|max:255',
        ];
    }
}
