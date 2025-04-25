<?php

declare(strict_types=1);

namespace App\Service;

interface UrlShortenerInterface
{
    public function generate(string $url): string;
}