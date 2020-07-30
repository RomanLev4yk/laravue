<?php

namespace Modules\Movie\Enums;

use Modules\Core\Enums\CoreEnum;

final class MovieGenre extends CoreEnum
{
    const ACTION_GENRE = 'AC';
    const ADVENTURE_GENRE = 'AD';
    const COMEDY_GENRE = 'CO';
    const CRIME_GENRE = 'CR';
    const DRAMA_GENRE = 'DR';
    const HISTORICAL_GENRE = 'HI';
    const HORROR_GENRE = 'HO';
    const SCIENCE_FICTION_GENRE = 'SF';
    const WESTERN_GENRE = 'WE';

    protected static $title = [
        self::ACTION_GENRE          => 'Экшн',
        self::ADVENTURE_GENRE       => 'Приключения',
        self::COMEDY_GENRE          => 'Комедия',
        self::CRIME_GENRE           => 'Преступный',
        self::DRAMA_GENRE           => 'Драма',
        self::HISTORICAL_GENRE      => 'Исторический',
        self::HORROR_GENRE          => 'Ужас',
        self::SCIENCE_FICTION_GENRE => 'Фантастика',
        self::WESTERN_GENRE         => 'Вестерн'
    ];
}
