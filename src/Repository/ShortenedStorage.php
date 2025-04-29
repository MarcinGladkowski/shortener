<?php

declare(strict_types=1);

namespace App\Repository;

interface ShortenedStorage
{
    public function save(string $short): bool;
}