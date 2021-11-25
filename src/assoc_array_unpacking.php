<?php

namespace PHP81;

require_once __DIR__.'/../vendor/autoload.php';

// RFC: https://wiki.php.net/rfc/array_unpacking_string_keys

dump(
    [
        ...['latest_stable_php' => 8.0],
        ...new \ArrayIterator(['latest_stable_php' => 8.1]),
    ]
);
