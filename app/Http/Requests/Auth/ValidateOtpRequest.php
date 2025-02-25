<?php

namespace App\Http\Requests\Auth;

use App\Constants\ResponseMessages;
use App\Http\Requests\BaseFormRequest;
use Illuminate\Foundation\Http\FormRequest;

class ValidateOtpRequest extends BaseFormRequest
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
            'phone' => 'required|numeric|digits:11',
            'otp_code' => 'required|numeric|digits:4'
        ];
    }

    public function messages(): array
    {
        return [
            'phone.required' => ResponseMessages::V_PHONE_REQUIRED,
            'phone.numeric' => ResponseMessages::V_PHONE_NUMERIC,
            'phone.digits' => ResponseMessages::V_PHONE_SIZE,
            'otp_code.required' => ResponseMessages::V_OTP_EQUIRED,
            'otp_code.numeric' => ResponseMessages::V_OTP_NUMERIC,
            'otp_code.digits' => ResponseMessages::V_OTP_SIZE,
        ];
    }
}
