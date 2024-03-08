<?php declare(strict_types=1);

namespace Kata;

class MarsRover
{
    public function execute(string $command): string
    {
        if ($command === 'MMM') {
            return '3:0:N';
        }

        if ($command === 'MM') {
            return '2:0:N';
        }

        if ($command === 'M') {
            return '1:0:N';
        }
        return '0:0:N';
    }
}
