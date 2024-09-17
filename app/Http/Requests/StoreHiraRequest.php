<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHiraRequest extends FormRequest
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
            'process' => 'required|string|max:255',
            'activity' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'type_of_activity' => 'nullable|array',
            'type_of_activity.*' => 'string|max:255',
            'occupations' => 'required|string|max:255',
            'event' => 'required|string|max:255',
            'cause' => 'required|string|max:255',
            'impact' => 'required|string|max:255',
            'hazard_type' => 'required|string|max:255',
            'likelihood' => 'required|string|max:255',
            'impact_rating_factors' => 'required|string|max:255',
            'impact_score' => 'required|string|max:255',
            'overall_risk_score' => 'required|string|max:255',
            'operational_control_elimination' => 'nullable|array',
            'operational_control_elimination.*' => 'string|max:255',
            'operational_control_substitution' => 'nullable|array',
            'operational_control_substitution.*' => 'string|max:255',
            'operational_control_engineering' => 'nullable|array',
            'operational_control_engineering.*' => 'string|max:255',
            'operational_control_administrative' => 'nullable|array',
            'operational_control_administrative.*' => 'string|max:255',
            'ppe' => 'nullable|array',
            'ppe.*' => 'string|max:255',
            'risk_evaluation_control_type' => 'required|string|max:255',
            'risk_evaluation_effectiveness' => 'required|string|max:255',
            'risk_evaluation_likelihood' => 'required|string|max:255',
            'risk_evaluation_impact_score' => 'required|string|max:255',
            'risk_evaluation_overall_risk_score' => 'required|string|max:255',
            'risk_evaluation_level_of_significance' => 'required|string|max:255',
            'mitigation' => 'string|max:255',
            'type_of_mitigation' => 'string|max:255',
        ];
    }
}
