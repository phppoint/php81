<?php

namespace PHP81;

use Symfony\Polyfill\Php81\Php81;

// RFC: https://wiki.php.net/rfc/is_list

// composer require symfony/polyfill-php81

Php81::array_is_list(['a', 'b']);

/** @var list<int> */
