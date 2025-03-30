<?php

namespace App\Http\Requests;

use App\Constants\ResponseMessages;
use Illuminate\Foundation\Http\FormRequest;

class PaymentSendRequest extends FormRequest
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
            "slugs" => "required",
            "cupon" => "string|nullable"
        ];
    }

    public function messages(): array
    {
        return [
            'slugs.required' => ResponseMessages::V_SLUGS_REQUIRED,
        ];
    }
}
