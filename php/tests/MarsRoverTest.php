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

    /** @test */
    public function given_MM_command_return_2_0_N(): void
    {
        $marsRover = new MarsRover();

        $result = $marsRover->execute('MM');

        self::assertEquals('2:0:N', $result);
    }

    /** @test */
    public function given_MMM_command_return_3_0_N(): void
    {
        $marsRover = new MarsRover();

        $result = $marsRover->execute('MMM');

        self::assertEquals('3:0:N', $result);
    }

    /** @test */
    public function given_L_command_return_0_0_W(): void
    {
        $marsRover = new MarsRover();

        $result = $marsRover->execute('L');

        self::assertEquals('0:0:W', $result);
    }

    /** @test */
    public function given_LL_command_return_0_0_S(): void
    {
        $marsRover = new MarsRover();

        $result = $marsRover->execute('LL');

        self::assertEquals('0:0:S', $result);
    }

    /** @test */
    public function given_LLL_command_return_0_0_S(): void
    {
        $marsRover = new MarsRover();

        $result = $marsRover->execute('LLL');

        self::assertEquals('0:0:E', $result);
    }
}
