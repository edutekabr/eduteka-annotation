<?php

namespace App\Helpers;

use Illuminate\Validation\ValidationException;

trait CustomValidate
{
    public function validatePassword(string $password): string
    {
        //validações
        $lowercase = preg_match('/[a-z]/', $password);
        $uppercase = preg_match('/[A-Z]/', $password);
        $number = preg_match('/[0-9]/', $password);
        $specialChar = preg_match('/[^\w]/', $password);

        // dd($lowercase, $uppercase, $number, $specialChar);

        if (!$lowercase) {
            throw ValidationException::withMessages(['password' => 'O campo password tem que ter uma letra minúscula.']);
        } else if (!$uppercase) {
            throw ValidationException::withMessages(['password' => 'O campo password tem que ter uma letra maiúscula.']);
        } else if (!$number) {
            throw ValidationException::withMessages(['password' => 'O campo password tem que ter um número.']);
        } else if (!$specialChar) {
            throw ValidationException::withMessages(['password' => 'O campo password tem que ter um caractere especial.']);
        }

        return $password;
    }
}
