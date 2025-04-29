<?php

declare(strict_types=1);

namespace App\Repository;

use App\Client\SqlLite;

final readonly class SqlLiteStorage implements ShortenedStorage
{
    public function __construct(
        private(set) SqlLite $connection = new SqlLite()
    ) {
    }

    public function save(string $short): bool
    {
        return true;
    }
}