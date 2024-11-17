<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseNoiseIntensityMeasurementRequest extends FormRequest
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
            'area' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'location_id' => 'required|string|max:255',
            'day_time_reading' => 'required|string|max:255',
            'night_time_reading' => 'required|string|max:255',
            'date_of_test' => 'required|string',
            'standar_limit' => 'required|string|max:255',
            'created_by' => 'nullable|integer|exists:users,id',
        ];
    }
}

