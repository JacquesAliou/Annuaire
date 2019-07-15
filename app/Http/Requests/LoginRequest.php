<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [

            'login' => 'required',
            'password' => 'required',

        ];
    }

    public function messages()
    {
        return[

            "login.required" => "Le nom est obligatoire et doit contenir au moins un caractère spécial ou un chiffre",
            "password.required" => "Entrez votre mot de passe",
        ];
    }
}
