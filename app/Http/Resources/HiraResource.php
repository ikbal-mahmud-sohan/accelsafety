<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HiraResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'process' => $this->process,
            'activity' => $this->activity,
            'location' => $this->location,
            'type_of_activity' => $this->type_of_activity,
            'occupations' => $this->occupations,
            'event' => $this->event,
            'cause' => $this->cause,
            'impact' => $this->impact,
            'hazard_type' => $this->hazard_type,
            'likelihood' => $this->likelihood,
            'impact_rating_factors_regulatory' => $this->impact_rating_factors_regulatory,
            'impact_rating_factors_safety' => $this->impact_rating_factors_safety,
            'impact_score' => $this->impact_score,
            'overall_risk_score' => $this->overall_risk_score,
            'operational_control_elimination' => $this->operational_control_elimination,
            'operational_control_substitution' => $this->operational_control_substitution,
            'operational_control_engineering' => $this->operational_control_engineering,
            'operational_control_administrative' => $this->operational_control_administrative,
            'ppe' => $this->ppe,
            'risk_evaluation_control_type' => $this->risk_evaluation_control_type,
            'risk_evaluation_effectiveness' => $this->risk_evaluation_effectiveness,
            'risk_evaluation_likelihood' => $this->risk_evaluation_likelihood,
            'risk_evaluation_impact_score' => $this->risk_evaluation_impact_score,
            'risk_evaluation_overall_risk_score' => $this->risk_evaluation_overall_risk_score,
            'risk_evaluation_level_of_significance' => $this->risk_evaluation_level_of_significance,
            'mitigation' => $this->mitigation,
            'type_of_mitigation' => $this->type_of_mitigation,
            'status' => $this->status,
            'remarks' => $this->remarks,
            'status' => $this->status,
        ];
    }
}
