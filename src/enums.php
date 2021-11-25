<?php

namespace PHP81;

use Traversable;

require_once __DIR__.'/../vendor/autoload.php';

// RFC: https://wiki.php.net/rfc/enumerations

enum Locale: int implements \IteratorAggregate
{
    case RU = 1;
    case EN = 2;
    case FR = 3;

    public static function title(self $value): string
    {
        return match ($value) {
            self::RU => 'Русский',
            self::EN => 'Английский',
            self::FR => 'Французский',
        };
    }

    public function getIterator(): Traversable
    {
       yield from self::cases();
    }
}

dump(iterator_to_array(Locale::FR));
