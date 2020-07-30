<?php

namespace Modules\User\Helpers;

use Illuminate\Support\Facades\Hash;

class PasswordHelper
{
    public static function setPassword($password)
    {
        return (!is_null($password)) ? Hash::make($password) : null;
    }
}
