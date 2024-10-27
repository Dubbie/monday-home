<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgricultureInsuranceQuoteRequest extends FormRequest
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
            'area' => 'required|numeric',
            'yield' => 'required|numeric',
            'price_per_unit' => 'required|numeric',
            'message' => 'required'
        ];
    }
}
