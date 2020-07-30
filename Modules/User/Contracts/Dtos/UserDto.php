<?php

namespace Modules\User\Contracts\Dtos;

use Modules\Core\Infrastructure\Dto;

class UserDto extends Dto
{
    public $name;
    public $birth_date;
    public $company;
    public $login;
    public $email;
    public $phone;
    public $password;
    public $avatar;
    public $status;
}
