<?php declare(strict_types=1);

namespace KataTests;

use Kata\MarsRover;
use PHPUnit\Framework\TestCase;

class MarsRoverTest extends TestCase
{
    /** @test */
    public function given_empty_command_return_initial_position(): void
    {
        $marsRover = new MarsRover();

        $result = $marsRover->execute('');

        self::assertEquals('0:0:N', $result);
    }
}
