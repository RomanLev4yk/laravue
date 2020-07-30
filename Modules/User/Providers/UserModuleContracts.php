<?php

namespace Modules\User\Providers;

use Illuminate\Contracts\Container\Container;
use Modules\User\Contracts\Services\UserService;
use Modules\User\Contracts\UserContract;

trait UserModuleContracts
{
    public function registerServices(Container $container)
    {
        $container->bind(UserContract::class, UserService::class);
    }
}
