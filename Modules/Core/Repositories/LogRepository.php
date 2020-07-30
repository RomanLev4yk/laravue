<?php

namespace Modules\Core\Repositories;

use Modules\Core\Entities\Log;

class LogRepository extends Repository
{
    public function __construct(Log $model)
    {
        parent::__construct($model);
    }
}
