<?php

namespace App\Http\Requests;

use App\Constants\ResponseMessages;
use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends BaseFormRequest
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
            "rate" => "required|numeric|digit|max:5|min:1",
            "comment" => "required|string|max:255"
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
            'rate.required' => ResponseMessages::V_RATE_INVALID,
            'rate.numeric' => ResponseMessages::V_RATE_INVALID,
            'rate.digit' => ResponseMessages::V_RATE_INVALID,
            'rate.max' => ResponseMessages::V_RATE_INVALID,
            'rate.min' => ResponseMessages::V_RATE_INVALID,
            'comment.required' => ResponseMessages::V_COMMENT_INVALID,
            'comment.max' => ResponseMessages::V_COMMENT_INVALID,
        ];
    }
}
