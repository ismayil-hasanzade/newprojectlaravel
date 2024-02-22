<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            "email" => "sometimes|required|email",
            "password" => "sometimes|required|min:5"
        ];
    }

    public function messages()
    {
        return [
            "email.required" => 'Email daxil etmek mecburidir',
            'email.email' => 'Email formatinda olmalidir',
            'password.min' => 'Shifrenin uzunlugu minimum 5 simvoldan ibaret olmalidir ',
            'password.required' => 'Shifre daxil etmelisiz',
        ];
    }
}
