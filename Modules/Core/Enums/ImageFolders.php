<?php

namespace Modules\Core\Enums;

final class ImageFolders extends CoreEnum
{
    const ICON_FOLDER = 'icon';
    const IMAGE_FOLDER = 'image';
    const AVATAR_FOLDER = 'avatar';

    protected static $title = [
        self::ICON_FOLDER => 'Иконка фильма',
        self::IMAGE_FOLDER => 'Скрины из фильма',
        self::AVATAR_FOLDER => 'Аватарка пользователя'
    ];
}
