<?php

namespace Modules\User\Contracts\FactoryDtos;

use Carbon\Carbon;
use Modules\Core\Infrastructure\DtoFactory;
use Modules\User\Contracts\Dtos\UserDto;
use Modules\User\Helpers\PasswordHelper;
use Modules\User\Helpers\PhoneHelper;

/**
 * @property UserDto $dto
 */
class UserDtoFactory extends DtoFactory
{
    public function __construct(UserDto $dto)
    {
        parent::__construct($dto);
    }

    public function create(array $args)
    {
        $this->dto->name = $args['name'] ?? null;
        $this->dto->birth_date = isset($args['birth_date']) ? Carbon::parse($args['birth_date']) : null;
        $this->dto->company = $args['company'] ?? null;
        $this->dto->login = $args['login'] ?? null;
        $this->dto->email = $args['email'] ?? null;
        $this->dto->phone = isset($args['phone']) ? PhoneHelper::clearPhone($args['phone']) : null;
        $this->dto->password = isset($args['password']) ? PasswordHelper::setPassword($args['password']) : null;
        $this->dto->status = $args['status'] ?? null;

        return $this->dto;
    }

    public function addAvatar($file)
    {
        if (file_exists($file)) {
            $this->dto->avatar = $file;
        };
        return $this;
    }
}
