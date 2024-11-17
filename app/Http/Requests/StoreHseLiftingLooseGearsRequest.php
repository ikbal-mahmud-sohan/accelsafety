<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseLiftingLooseGearsRequest extends FormRequest
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
            'asset_nnumber' => 'required|string|max:255',
            'loose_gears_name' => 'required|string|max:255',
            'loose_gears_specification' => 'required|string|max:255',
            'capacity' => 'required|string|max:255',
            'tested_on' => 'required|string|max:255',
            'agency' => 'required|string|max:255',
        ];
    }
}
