<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreChainPulleyBlockRequest extends FormRequest
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
            'project_name' => 'required|string',
            'project_code' => 'required|string',
            'checklist_no' => 'required|string',
            'date' => 'required|string',
            'make' => 'required|string',
            'model' => 'required|string',
            'isgec' => 'required|string',
            'chain_pulley_des_1' => 'nullable|string',
            'chain_pulley_des_2' => 'nullable|string',
            'chain_pulley_des_3' => 'nullable|string',
            'chain_pulley_des_4' => 'nullable|string',
            'chain_pulley_des_5' => 'nullable|string',
            'chain_pulley_des_6' => 'nullable|string',
            'is_chain_pulley_1' => 'nullable|string',
            'is_chain_pulley_2' => 'nullable|string',
            'is_chain_pulley_3' => 'nullable|string',
            'is_chain_pulley_4' => 'nullable|string',
            'is_chain_pulley_5' => 'nullable|string',
            'is_chain_pulley_6' => 'nullable|string',
            'chain_pulley_remarks_1' => 'nullable|string',
            'chain_pulley_remarks_2' => 'nullable|string',
            'chain_pulley_remarks_3' => 'nullable|string',
            'chain_pulley_remarks_4' => 'nullable|string',
            'chain_pulley_remarks_5' => 'nullable|string',
            'chain_pulley_remarks_6' => 'nullable|string',
            'fit' => 'required|string',
            'checked_by' => 'nullable|string',
            'reviewed_by' => 'nullable|string',
            'checked_by_date' => 'nullable|string',
            'reviewed_by_date' => 'nullable|string',
            'checked_by_signature' => 'sometimes|array',
            'checked_by_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'reviewed_by_signature' => 'sometimes|array',
            'reviewed_by_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
