<?php

namespace PHP81;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

require_once __DIR__.'/../vendor/autoload.php';

// RFC: https://wiki.php.net/rfc/explicit_octal_notation

dump(0xaa);
dump(0b11);
dump(0777);

dump(0o777);
