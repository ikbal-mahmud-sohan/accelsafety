<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseOHSMSFormRequest extends FormRequest
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
            'factory_name' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'ohsmsf_sign_1' => 'required|string|max:255',
            'ohsmsf_sign_2' => 'required|string|max:255',
            'ohsmsf_sign_3' => 'required|string|max:255',
            'ohsmsf_sign_4' => 'required|string|max:255',
            'ohsmsf_sign_5' => 'required|string|max:255',
            'ohsmsf_sign_6' => 'required|string|max:255',
            'ohsmsf_sign_7' => 'required|string|max:255',
            'ohsmsf_sign_8' => 'required|string|max:255',
            'ohsmsf_sign_9' => 'required|string|max:255',
            'ohsmsf_sign_10' => 'required|string|max:255',
            'ohsmsf_sign_11' => 'required|string|max:255',
            'ohsmsf_sign_12' => 'required|string|max:255',
            'ohsmsf_sign_13' => 'required|string|max:255',
            'ohsmsf_sign_14' => 'required|string|max:255',
            'ohsmsf_sign_15' => 'required|string|max:255',
            'created_by' => 'required|string|max:255'
        ];
    }
}
