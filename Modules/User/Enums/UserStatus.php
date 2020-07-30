<?php

namespace Modules\User\Enums;

use Modules\Core\Enums\CoreEnum;

final class UserStatus extends CoreEnum
{
    const ACTIVE = 'A';
    const NOT_ACTIVE = 'NA';
    const DELETE = 'D';

    protected static $title = [
        self::ACTIVE => 'Активный',
        self::NOT_ACTIVE => 'Неактивный',
        self::DELETE => 'Удален',
    ];
}
