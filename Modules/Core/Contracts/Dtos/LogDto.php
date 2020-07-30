<?php

namespace Modules\Core\Contracts\Dtos;

use Modules\Core\Infrastructure\Dto;

class LogDto extends Dto
{
    public $module;
    public $type;
    public $message;
    public $data;
}
