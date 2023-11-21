<?php

namespace App\strategies;

class Easy
{
    public function move(&$field):void
    {
        $breakLoops = false;
        for ($i = 1; $i <= 3; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                $strStep = "{$j}, {$i}";
                if ($field[$strStep] === 'true') {
                    $field[$strStep] = 'O';
                    $breakLoops = true;
                    break;
                }
            }
            if ($breakLoops) {
                break;
            }
        }
    }
}
