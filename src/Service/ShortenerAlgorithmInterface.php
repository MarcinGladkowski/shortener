<?php

declare(strict_types=1);

namespace App\Service;

interface ShortenerAlgorithmInterface
{
    public function hash(string $value): string;
}