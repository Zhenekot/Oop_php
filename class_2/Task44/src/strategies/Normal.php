<?php

namespace App\strategies;

class Normal
{
    public function move(&$field):void
    {
        $breakLoops = false;
        for ($i = 1; $i <= 3; $i++) {
            for ($j = 3; $j >= 1; $j--) {
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
