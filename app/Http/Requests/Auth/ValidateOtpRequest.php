<?php

namespace App\Http\Requests\Auth;

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
            'phone.required' => 'The phone field is required.',
            'phone.numeric' => 'The phone field must be a number.',
            'phone.digits' => 'The phone field must be 11 digits.',
            'otp_code.required' => 'The otp code field is required.',
            'otp_code.numeric' => 'The otp code field must be a number.',
            'otp_code.digits' => 'The otp code field must be 4 digits.',
        ];
    }
}
