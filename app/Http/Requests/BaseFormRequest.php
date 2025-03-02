<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Response;

class BaseFormRequest extends FormRequest
{
    
    public function wantsJson()
    {
        return true;
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                "status" => false,
                'message' => 'Validation failed',
                'data' => null,
                'errors' =>$validator->errors()->all()
            ], 422)
        );
    }
}

