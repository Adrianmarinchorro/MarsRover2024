<?php declare(strict_types=1);

namespace Kata;

class MarsRover
{
    private const INITIAL_POSITION_X = 0;
    private const INITIAL_ORIENTATION = 'N';
    private const COMPASS = [
        'N', 'W', 'S', 'E'
    ];

    public function execute(string $command): string
    {
        $positionX = self::INITIAL_POSITION_X;

        $positionX += substr_count($command, 'M');

        $orientation = self::COMPASS[substr_count($command, 'L') % count(self::COMPASS)];

        return $positionX . ':0:' . $orientation;
    }
}
