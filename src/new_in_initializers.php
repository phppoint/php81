<?php

namespace PHP81;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Symfony\Component\Validator\Constraints as Assert;

require_once __DIR__.'/../vendor/autoload.php';

// RFC: https://wiki.php.net/rfc/new_in_initializers

final class Service {
    public function __construct(
        private LoggerInterface $logger = new NullLogger(),
    ) {
    }

    private function do()
    {
        $this->logger->alert('PHP {version} released 🤩', [
            'version' => 8.1,
        ]);
    }
}

final class Request
{
    #[Assert\All(
        constraints: [
            new Assert\NotBlank(),
            new Assert\Uuid(),
        ]
    )]
    public array $uuids;
}
