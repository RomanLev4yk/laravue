<?php

namespace Modules\User\Contracts;

use Modules\User\Contracts\Dtos\UserDto;

interface UserContract
{
    public function updateUser(UserDto $dto, int $userId);
    public function createUser(UserDto $dto);
}
