<?php

namespace App;
use Exception;

class SmartSplFileInfo extends \SplFileInfo
{
    public function getSize(string $size = 'B')
    {
        switch ($size) {
            case 'B':
                return parent::getSize();
            case 'b':
                $sizeb = parent::getSize();
                return $sizeb * 8;
            default:
                throw new Exception();
        }
    }
}