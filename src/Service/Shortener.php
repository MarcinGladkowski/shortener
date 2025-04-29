<?php

declare(strict_types=1);

namespace App\Service;

final readonly class Shortener implements UrlShortenerInterface
{
    public function __construct(
        private ShortenerAlgorithmInterface $shortenerAlgorithm,
    ) {
    }

    public function generate(string $url): string
    {
        return $this->shortenerAlgorithm->hash($url);
    }
}
