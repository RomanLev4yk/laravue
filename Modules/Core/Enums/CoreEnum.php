<?php

namespace Modules\Core\Enums;

use BenSampo\Enum\Enum;

class CoreEnum extends Enum
{
    protected static $title = [];

    protected static $template = [];

    public static function getTitles()
    {
        return static::$title;
    }

    public static function getTitle(string $value)
    {
        return static::$title[$value];
    }

    public static function getTemplate(string $value)
    {
        return static::$template[$value];
    }

    public static function getStringKeyFromValue()
    {
        return implode(',', array_keys(static::$title));
    }
}
