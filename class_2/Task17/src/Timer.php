<?php

namespace App;

class Timer
{
    public const SEC_PER_MIN = 60;
    public const SEC_PER_HOUR = 3600;

    private int $secondsCount;

    public function __construct(int $seconds, int $minute = 0, int $hour = 0){
        $this->secondsCount = $seconds + ($minute * self::SEC_PER_MIN) + ($hour * self::SEC_PER_HOUR);
    }

    public function getLeftSeconds(): int
    {
        return $this->secondsCount;
    }

    public function tick():void
    {
        $this->secondsCount--;
    }
}