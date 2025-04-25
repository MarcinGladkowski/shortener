<?php

declare(strict_types=1);

namespace App\Service;

final readonly class Rot13HashedShortenedAlgorithm implements ShortenerAlgorithmInterface
{
    public function __construct(
        private int $length = 8,
        private string $hashFunction = 'sha256',
    ) {
    }

    public function hash(string $value): string
    {
        return substr(hash($this->hashFunction, str_rot13($value)), 0, $this->length);
    }
}