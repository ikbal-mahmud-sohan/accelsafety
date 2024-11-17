<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseListConfinedSpaceRequest extends FormRequest
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
            
            'confined_space_no' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'responsible_department' => 'required|string|max:255',
            'cs_image' => 'sometimes|array',
            'cs_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
