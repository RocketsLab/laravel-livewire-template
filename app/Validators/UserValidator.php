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
            'name.required' => __('members.errors.name-required'),
            'email.required' => __('members.errors.email-required'),
            'email.email' => __('members.errors.email-email'),
            'email.unique' => __('members.errors.email-unique'),
            'password.required' => __('members.errors.password-required'),
            'password.min' => __('members.errors.password-min'),
            'password.confirmed' => __('members.errors.password-confirmed')
        ];
    }
}
