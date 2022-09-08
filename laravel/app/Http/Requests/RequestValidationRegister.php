<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestValidationRegister extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "login"=>'required',
            "name"=>'required',
            "age"=>'required',
            "address"=>'required',
            "email" => 'required|email|unique:users',
            "password"=>'required|confirmed'
        ];
    }
}