<?php

declare(strict_types=1);

namespace App\Service;

final readonly class Shortener implements UrlShortenerInterface
{

    public function generate(string $url): string
    {
        return 'test';
    }
}