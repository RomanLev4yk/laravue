<?php

namespace Modules\Core\Infrastructure;

abstract class DtoFactory
{
    protected $dto;

    public function __construct(Dto $dto)
    {
         $this->dto = $dto;
    }

    abstract public function create(array $args);
}
