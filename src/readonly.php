<?php

namespace PHP81;

require_once __DIR__.'/../vendor/autoload.php';

// RFC: https://wiki.php.net/rfc/readonly_properties_v2

/**
 * @psalm-immutable
 */
final class Email
{
    private function __construct(
        private readonly string $email,
    ) {
    }

    public static function fromString(string $email): self
    {
        self::validate($email);

        return new self($email);
    }

    private static function validate(string $email): void
    {
        \assert(
            filter_var($email, FILTER_VALIDATE_EMAIL),
            'Invalid email!',
        );
    }

    public function toString(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        self::validate($email);
        $this->email = $email;
    }

    public function withEmail(string $email): self
    {
        self::validate($email);
        $new = clone $this;
        $new->email = $email;

        return $new;
    }
}

dump(
    Email::fromString('nikic@php.net')->withEmail('nikita-ne-uhodi@php.net')
);
