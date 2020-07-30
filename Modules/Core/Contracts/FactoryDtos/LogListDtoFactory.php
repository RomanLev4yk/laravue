<?php

namespace Modules\Core\Contracts\FactoryDtos;

use Modules\Core\Contracts\Dtos\LogListDto;
use Modules\Core\Infrastructure\DtoFactory;

/**
 * @property LogListDto $dto
 */
class LogListDtoFactory extends DtoFactory
{
    public function __construct(LogListDto $dto)
    {
        parent::__construct($dto);
    }

    public function create(array $args)
    {
        $this->dto->startDate = $args['minDate'];
        $this->dto->endDate = $args['maxDate'];
        $this->dto->isFirst = $args['isFirst'];
        $this->dto->offsetNumber = $args['offsetNumber'];
        $this->dto->module = $args['module'];
        $this->dto->type = $args['type'];
        if (isset($args['search'])) {
            $this->dto->search = $args['search'];
        }

        return $this->dto;
    }
}
