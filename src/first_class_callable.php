<?php

// RFC: https://wiki.php.net/rfc/first_class_callable_syntax

namespace ExcelTools
{
    require_once __DIR__.'/../vendor/autoload.php';

    function normalizeString(string $string): string
    {
        return str_replace(\chr(194).\chr(160), ' ', $string);
    }
}

namespace PHP80
{
    use function ExcelTools\normalizeString;

    dump(
        array_map(
            'ExcelTools\\normalizeString',
            ['a', 'b'],
        )
    );
}


namespace PHP81
{
    use function ExcelTools\normalizeString;

    dump(
        array_map(
            normalizeString(...),
            ['a', 'b'],
        )
    );
}
