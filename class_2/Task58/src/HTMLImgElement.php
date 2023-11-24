<?php

namespace App;

class HTMLImgElement extends HTMLElement
{
    private const ATTRIBUTE_NAMES = ['src'];

    public static function getAttributeNames()
    {
        return array_merge(parent::getAttributeNames(), static::ATTRIBUTE_NAMES);
    }

    public function isValid():bool{
        $temp = $this->getAttributes();
        if(!array_diff(array_keys($temp), $this->getAttributeNames())){
            return true;
        }
        return false;
    }
}
