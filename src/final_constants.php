<?php

namespace PHP81;

require_once __DIR__.'/../vendor/autoload.php';

// RFC: https://wiki.php.net/rfc/final_class_const

abstract class Foo
{
    final public const TEST = '1';
}

final class Bar extends Foo
{
    public const TEST = 2;
}

interface Baz {
    final public const TEST = 3;
}

(new \ReflectionClassConstant(Baz::class, 'TEST'))->isFinal();
