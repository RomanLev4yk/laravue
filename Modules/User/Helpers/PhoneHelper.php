<?php

namespace Modules\User\Helpers;

class PhoneHelper
{
    public static function clearPhone($phone)
    {
        return (is_null($phone)) ? null : $phone = preg_replace('/\D+/', '', $phone);
    }
}