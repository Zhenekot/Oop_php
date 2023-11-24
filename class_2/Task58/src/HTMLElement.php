<?php

namespace App;

abstract class HTMLElement
{
    private const ATTRIBUTE_NAMES = ['name', 'class'];

    public $attributes = [];

    public static function getAttributeNames()
    {
        return self::ATTRIBUTE_NAMES;
    }

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    abstract public function isValid();

}
