<?php

namespace App\Tests\Service;

use App\Service\Shortener;
use PHPUnit\Framework\TestCase;

class ShortenerTest extends TestCase
{
    public function shortenerServiceShouldReturnAnyValue(): void
    {
        self::assertIsString(new Shortener());
    }
}