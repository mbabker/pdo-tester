<?php declare(strict_types=1);

namespace Tests;

use App\Pinger;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * @requires extension pdo
 */
final class PingerTest extends TestCase
{
    public function testTheDatabaseIsPinged(): void
    {
        /** @var MockObject&\PDO $connection */
        $connection = $this->createMock(\PDO::class);
        $connection->expects(self::once())
            ->method('query')
            ->with('SELECT 1');

        (new Pinger($connection))->ping();
    }
}
