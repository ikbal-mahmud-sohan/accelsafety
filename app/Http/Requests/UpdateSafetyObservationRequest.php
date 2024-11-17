<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSafetyObservationRequest extends FormRequest
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
            'remarks' => 'required|string',
            'corrective_image' => 'sometimes|array',
            'corrective_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'importance_level' => 'nullable|string|max:255',
            'work_accomplished_by' => 'nullable|string|max:255',
        ];
    }
}
