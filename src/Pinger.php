<?php declare(strict_types=1);

namespace App;

final class Pinger
{
    public function __construct(
        private \PDO $pdo
    ) {}

    public function ping(): void
    {
        $this->pdo->query('SELECT 1');
    }
}
