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

    /** @test */
    public function given_M_command_return_1_0_N(): void
    {
        $marsRover = new MarsRover();

        $result = $marsRover->execute('M');

        self::assertEquals('1:0:N', $result);
    }
}
