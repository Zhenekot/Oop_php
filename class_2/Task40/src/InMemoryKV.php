<?php

namespace App;

class InMemoryKV {
    private array $data;
    public function __construct(private array $array=[]){
        $this->data = $array;
    }

    public function set($key, $value):void
    {   
        $this->data[$key] = $value;
    }

    public function unset($key):void
    {
        unset($this->data[$key]);
    }

    public function get($key, $default = null):mixed
    {
        return $this->data[$key] ?? $default;
    }

    public function toArray():array
    {
        return $this->data;
    }
}
