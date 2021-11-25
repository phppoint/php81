<?php

namespace PHP81;

// RFC: https://wiki.php.net/rfc/pure-intersection-types

interface StreamCache
{
    /**
     * @template T
     * @param \Generator<T> $stream
     * @return \Traversable<T>&\Countable
     */
    public function cache(\Generator $stream): \Traversable&\Countable;
}
