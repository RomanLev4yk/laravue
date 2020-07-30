<?php

namespace Modules\Core\Contracts\FactoryDtos;

use Modules\Core\Contracts\Dtos\LogDto;
use Modules\Core\Infrastructure\DtoFactory;

class LogDtoFactory extends DtoFactory
{
    public function __construct(LogDto $dto)
    {
        parent::__construct($dto);
    }

    public function create(array $args)
    {
        $this->dto->module = $args['module'];
        $this->dto->type = $args['type'];
        $this->dto->message = $args['message'];
        $this->dto->data = $args['data'];

        return $this->dto;
    }
}
