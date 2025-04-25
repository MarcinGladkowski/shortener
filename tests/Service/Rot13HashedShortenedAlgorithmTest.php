<?php

declare(strict_types=1);

namespace App\Tests\Service;

use App\Service\Rot13HashedShortenedAlgorithm;
use PHPUnit\Framework\TestCase;

class Rot13HashedShortenedAlgorithmTest extends TestCase
{

    /**
     * @dataProvider valueProvider
     */
    public function testGeneratingHash(string $input, string $output): void
    {
        self::assertSame($output, new Rot13HashedShortenedAlgorithm()->hash($input));
    }

    public function valueProvider(): \Generator
    {
        yield [
            'input' => 'test',
            'expected' => 'f25f2772'
        ];

        yield [
            'input' => '',
            'expected' => 'e3b0c442'
        ];
    }
}