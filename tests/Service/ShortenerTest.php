<?php

namespace App\Tests\Service;

use App\Service\Shortener;
use App\Tests\TestDoubles\DummyShortenerAlgorithm;
use PHPUnit\Framework\TestCase;

class ShortenerTest extends TestCase
{
    public function testShouldShortenerServiceShouldReturnAnyValue(): void
    {
        self::assertIsString(new Shortener(new DummyShortenerAlgorithm())->generate('test'));
    }
}