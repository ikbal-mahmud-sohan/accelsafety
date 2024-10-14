<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseLottoFormRequest extends FormRequest
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
            'location' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'work_performed' => 'required|string|max:255',
            'contact_person_name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'energy' => 'required|array',
            'energy.*' => 'string|max:255',
            'lag_out_des1' => 'nullable|boolean',
            'lag_out_des2' => 'nullable|boolean',
            'lag_out_des3' => 'nullable|boolean',
            'lag_out_des4' => 'nullable|boolean',
            'lag_out_des5' => 'nullable|boolean',
            'lag_out_des6' => 'nullable|boolean',
            'lag_out_des7' => 'nullable|boolean',
            'lag_out_des8' => 'nullable|boolean',
            'lag_out_des9' => 'nullable|boolean',
            'lag_out_des10' => 'nullable|boolean',
            'lag_out_name' => 'required|string|max:255',
            'lag_out_designation' => 'required|string|max:255',
            'lag_out_date' => 'required|string|max:255',
            'tag_out_name' => 'required|string|max:255',
            'tag_out_designation' => 'required|string|max:255',
            'tag_out_date' => 'required|string|max:255',
            'created_by' => 'nullable|exists:users,id',
        ];
    }
}

