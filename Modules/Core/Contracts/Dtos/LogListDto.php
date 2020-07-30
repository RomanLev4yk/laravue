<?php

namespace Modules\Core\Contracts\Dtos;

use Modules\Core\Infrastructure\Dto;

class LogListDto extends Dto
{
    public $startDate;
    public $endDate;
    public $isFirst;
    public $offsetNumber;
    public $search;
    public $module;
    public $type;
}
