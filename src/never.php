<?php

namespace PHP81;

// RFC: https://wiki.php.net/rfc/noreturn_type

function throwException(): never
{
    throw new \LogicException();
}

function redirect(string $uri): never
{
    header('Location: '.$uri);
    exit();
}

abstract class Foo
{
    abstract public function bar(): bool;
}

final class Baz extends Foo
{
    public function bar(): never
    {
        throw new \Exception();
    }
}
