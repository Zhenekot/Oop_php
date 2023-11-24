<?php

namespace App;
use Exception;

class GoogleStorage{
    private $elements = [];

    public function get($key)
    {
        return $this->elements[$key];
    }

    public function set($key, $value)
    {
        return $this->elements[$key] = $value;
    }

    public function count()
    {
        throw new Exception();
    }
}