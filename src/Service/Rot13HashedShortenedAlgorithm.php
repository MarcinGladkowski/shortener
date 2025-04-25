<?php

declare(strict_types=1);

namespace App\Service;

final class Rot13HashedShortenedAlgorithm implements ShortenerAlgorithmInterface
{
    public function hash(string $value): string
    {
        return substr(hash('sha256', str_rot13($value)), 0, 8);
    }
}