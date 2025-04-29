<?php

declare(strict_types=1);

namespace App\Client;

use PDO;

class SqlLite
{
    public private(set) PDO $connection;

    public function __construct(
        string $database = 'database/short.db'
    ) {
        // move client creation, add command to create database and schema
        $this->connection = new PDO(sprintf('sqlite:%s', $database));
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}