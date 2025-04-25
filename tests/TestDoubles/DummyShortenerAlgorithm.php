<?php

namespace App\Tests\TestDoubles;

use App\Service\ShortenerAlgorithmInterface;

final class DummyShortenerAlgorithm implements ShortenerAlgorithmInterface
{
    public function hash(string $value): string
    {
        return $value;
    }
}
