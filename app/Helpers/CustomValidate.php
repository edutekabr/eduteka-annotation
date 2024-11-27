<?php

namespace App\Helpers;

trait CustomValidate
{
    public function validatePassword(string $password): string
    {
        //validações

        return $password;
    }
}
