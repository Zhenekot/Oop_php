<?php

namespace App\strategies;

class Easy
{
    public function move(&$field):void
    {
        for ($i = 1; $i <= 3; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                $strStep = "{$i}, {$j}";
                if ($field[$strStep] === 'true') {
                    $field[$strStep] = 'O';
                    break;
                }
            }
        }
    }
}
