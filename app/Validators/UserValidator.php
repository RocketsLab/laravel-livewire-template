<?php

namespace App\Validators;

use Illuminate\Validation\Rule;

class UserValidator extends Validator
{
    public static function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', Rule::unique('users', 'email')->ignore(self::getIgnore('user'))],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    public static function messages(): array
    {
        return [
            'name.required' => 'Insira o nome',
            'email.required' => 'Informe o email',
            'email.email' => 'Email inválido',
            'email.unique' => 'Email já cadastrado',
            'password.required' => 'Insira uma senha',
            'password.min' => 'A senha deve conter no mínimo 8 caracteres',
            'password.confirmed' => 'As senhas não coincidem'
        ];
    }
}
