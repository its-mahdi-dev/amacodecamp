<?php

namespace App\Http\Requests;

use App\Constants\ResponseMessages;
use Illuminate\Foundation\Http\FormRequest;

class BootcampFilterRequest extends BaseFormRequest
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
            'search' => 'nullable|string|max:255', // for searching bootcamps by title or other fields
            'tag' => 'nullable|string',
            'price_min' => 'nullable|numeric|min:0', // for filtering by minimum price
            'price_max' => 'nullable|numeric|min:0', // for filtering by maximum price
            'per_page' => 'nullable|integer|min:1', // for pagination, default can be set in the controller
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'price_min.numeric' => ResponseMessages::V_BOOTCAMP_PRICE_NUMERIC,
            'price_max.numeric' => ResponseMessages::V_BOOTCAMP_PRICE_NUMERIC,
            'per_page.integer' => ResponseMessages::V_BOOTCAMP_PERPAGE,
            'per_page.min' => ResponseMessages::V_BOOTCAMP_PERPAGE,
        ];
    }
}
