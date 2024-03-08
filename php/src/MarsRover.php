<?php declare(strict_types=1);

namespace Kata;

class MarsRover
{
    private const INITIAL_POSITION_X = 0;

    public function execute(string $command): string
    {
        $positionX = self::INITIAL_POSITION_X;

        $positionX += substr_count($command, 'M');

        if ($command === 'L') {
            return $positionX . ':0:W';
        }

        if ($command === 'LL') {
            return $positionX . ':0:S';
        }

        if ($command === 'LLL') {
            return $positionX . ':0:E';
        }

        return $positionX . ':0:N';
    }
}
