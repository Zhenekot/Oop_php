<?php

namespace App\strategies;

class Normal
{
    public function move(&$field):void
    {
        for ($i = 3; $i >= 1; $i--) {
            for ($j = 1; $j <= 3; $j++) {
                $strStep = "{$i}, {$j}";
                if ($field[$strStep] === 'true') {
                    $field[$strStep] = 'O';
                }
            }
        }
    }
}
