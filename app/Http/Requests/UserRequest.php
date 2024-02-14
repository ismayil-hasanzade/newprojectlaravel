<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
//
    public function rules(): array
    {
        return [
            "name" => 'sometimes|required|min:3',
            "email" => "sometimes|required|email|unique:users,email," . $this->route('user') . ",user_id",
            "password" => "sometimes|confirmed|required|min:5"

        ];
    }

    public function messages()
    {

        return [
            "name.required" => 'Ad daxil etmek Mecburidir',
            "name.min" => 'Minimum 3 simvol daxil etmelisiz',
            "email.required" => 'Email daxil etmek mecburidir',
            'email.unique' => 'Daxil etdiyiniz email sistemde artiq movcuddur',
            'email.email' => 'Email formatinda olmalidir',
            'password.min' => 'Shifrenin uzunlugu minimum 5 simvoldan ibaret olmalidir ',
            'password.required' => 'Shifre daxil etmelisiz',
            'password.confirmed' => 'Daxil edilen shifreler eyni deyil'
        ];

    }
}
