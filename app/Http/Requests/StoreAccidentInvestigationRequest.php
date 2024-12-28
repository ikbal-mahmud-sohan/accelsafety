<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAccidentInvestigationRequest extends FormRequest
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
            // Investigation details
            'accident_id' => 'required|exists:accidents,id',
            'investigation_name_1' => 'required|string|max:255',
            'investigation_designation_1' => 'required|string|max:255',
            'investigation_sign_1' => 'sometimes|array',
            'investigation_sign_1.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'investigation_name_2' => 'required|string|max:255',
            'investigation_designation_2' => 'required|string|max:255',
            'investigation_sign_2' => 'sometimes|array',
            'investigation_sign_2.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'investigation_name_3' => 'required|string|max:255',
            'investigation_designation_3' => 'required|string|max:255',
            'investigation_sign_3' => 'sometimes|array',
            'investigation_sign_3.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'investigation_name_4' => 'required|string|max:255',
            'investigation_designation_4' => 'required|string|max:255',
            'investigation_sign_4' => 'sometimes|array',
            'investigation_sign_4.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ];
    }
}