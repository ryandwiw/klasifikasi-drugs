<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DrugStorerequest extends FormRequest
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
            'age' => 'required',
            'sex' => 'required',
            'blood_pressure' => 'required',
            'cholesterol' => 'required',
            'na_to_k_ratio' => 'required',
            'drug_type' => 'required',
        ];
    }
}
