<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePPEDistributionRegisterRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'contractor_name' => 'required|string|max:255',
            'process' => 'required|string|max:255',
            'ppe' => 'required|string|max:255',
            'quantity' => 'required|string|max:255',
            'date_of_issue' => 'required|string|max:255',
            'date_of_return' => 'required|string|max:255',
        ];
    }
}
