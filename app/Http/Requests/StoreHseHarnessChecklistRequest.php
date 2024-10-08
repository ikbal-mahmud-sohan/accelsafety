<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHseHarnessChecklistRequest extends FormRequest
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
            'name_of_contractor' => 'required|string|max:255',
            'checklists_date' => 'required|string|max:255',
            'report_no' => 'required|string|max:255',
            'locations' => 'required|string|max:255',
            'project_name' => 'required|string|max:255',
            'harness_no' => 'required|string|max:255',
            'date_of_receipt_on_site' => 'required|string|max:255',
            'manufacturer' => 'required|string|max:255',
            'contractors_representative_name' => 'required|string|max:255',
            'contractors_representative_signature' => 'sometimes|array',
            'contractors_representative_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'contractors_representative_aproved_date' => 'required|string|max:255',
            'bsrm_representative_name' => 'required|string|max:255',
            'bsrm_representative_signature' => 'sometimes|array',
            'bsrm_representative_signature.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bsrm_representative_aproved_date' => 'required|string|max:255',
            'harness_image_1' => 'sometimes|array',
            'harness_image_1.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harness_is_correct_1' => 'required|string|max:255',
            'harness_image_2' => 'sometimes|array',
            'harness_image_2.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harness_is_correct_2' => 'required|string|max:255',
            'harness_image_3' => 'sometimes|array',
            'harness_image_3.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harness_is_correct_3' => 'required|string|max:255',
            'harness_image_4' => 'sometimes|array',
            'harness_image_4.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harness_is_correct_4' => 'required|string|max:255',
            'harness_image_5' => 'sometimes|array',
            'harness_image_5.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harness_is_correct_5' => 'required|string|max:255',
            'harness_image_6' => 'sometimes|array',
            'harness_image_6.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harness_is_correct_6' => 'required|string|max:255',
            'harness_image_7' => 'sometimes|array',
            'harness_image_7.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harness_is_correct_7' => 'required|string|max:255',
            'harness_image_8' => 'sometimes|array',
            'harness_image_8.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harness_is_correct_8' => 'required|string|max:255',
            'harness_image_9' => 'sometimes|array',
            'harness_image_9.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'harness_is_correct_9' => 'required|string|max:255',
        ];
    }
}
