<?php

namespace App\Http\Requests;

use App\Constants\ResponseMessages;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // You can add additional logic here for authorization
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:5120',
            'email' => 'nullable|email', // Ensure email is unique, excluding current user
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.email' => ResponseMessages::V_STUDENT_EMAIL,
            'first_name.max' => ResponseMessages::V_STUDENT_NAME,
            'last_name.max' => ResponseMessages::V_STUDENT_NAME,
            'avatar.mimes' => ResponseMessages::V_STUDENT_PROFILE_TYPE,
            'avatar.max' => ResponseMessages::V_STUDENT_PROFILE_SIZE,
        ];
    }
}
