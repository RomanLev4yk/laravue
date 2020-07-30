<?php

namespace Modules\Core\Helpers;

class ImageConfig
{
    const EXTENSION = 'jpg';
    const PATH = 'public/img/';

    public static function getFullPath($folder, $file)
    {
        return self::PATH . $folder . '/' . $file;
    }

    public static function normalizeName($name)
    {
        return md5($name) . '.' . self::EXTENSION;
    }
}
