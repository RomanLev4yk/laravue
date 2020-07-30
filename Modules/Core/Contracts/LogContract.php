<?php

namespace Modules\Core\Contracts;

use Modules\Core\Contracts\Dtos\LogDto;

interface LogContract
{
    public function createLog(LogDto $dto);
    public function notificationLog($message, $data);
}
