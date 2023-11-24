<?php

namespace App;

class HTMLButtonElement extends HTMLElement
{
    private const ATTRIBUTE_NAMES = ['type'];
    private const TYPE_NAMES = ['button', 'submit', 'reset'];

    public static function getAttributeNames()
    {
        return array_merge(parent::getAttributeNames(), static::ATTRIBUTE_NAMES);
    }

    public function isValid():bool{
        $temp = $this->getAttributes();
        if(!array_diff(array_keys($temp), $this->getAttributeNames()) && array_key_exists(self::ATTRIBUTE_NAMES[0], $temp) && (in_array($temp["type"], self::TYPE_NAMES))){
            return true;
        }
        return false;
    }
}
