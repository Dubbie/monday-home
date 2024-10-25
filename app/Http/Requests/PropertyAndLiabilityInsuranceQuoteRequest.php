<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyAndLiabilityInsuranceQuoteRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'need_information' => 'required',
            'building_insurance' => 'required',
            'inventory_insurance' => 'required',
            'liability_insurance' => 'required',
            'architect_installation_insurance' => 'required',
            'message' => 'required'
        ];
    }
}
