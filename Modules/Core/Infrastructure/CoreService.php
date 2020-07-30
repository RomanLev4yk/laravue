<?php

namespace Modules\Core\Infrastructure;

use Illuminate\Container\Container;
use Illuminate\Support\Facades\Auth;

abstract class CoreService
{
    public function getDi($className)
    {
        return Container::getInstance()->make($className);
    }

    protected function authUser()
    {
        return Auth::user();
    }

    protected function authId()
    {
        return Auth::id();
    }

    protected function toJson($data)
    {
        return json_encode($data);
    }

    protected function toData(string $data)
    {
        return json_decode($data);
    }
}
