<?php

namespace App;

class Obj implements ObjInterface, \ArrayAccess {
    private array $items = [];

    public function __construct(array $items = []) {
        foreach ($items as $key => $value) { 
            $this->items[$key] = is_array($value) ? new self($value) : $value;
        }
    }
    public function __get(mixed $key):mixed {
        return $this->items[$key] ?? null;
    }

    public function __set(mixed $key, mixed $value):void{
        $this->items[$key] = is_array($value) ? new self($value) : $value;
    }

    public function offsetExists(mixed $offset):bool{
        return isset($this->items[$offset]);
    }

    public function offsetGet(mixed $offset):mixed{
        return $this->items[$offset] ?? null;
    }

    public function offsetSet(mixed $offset, mixed $value):void{
        if (is_null($offset)) {
            $this->items[] = $value;
        } else {
            $this->items[$offset] = is_array($value) ? new self($value) : $value;
        }
    }

    public function offsetUnset(mixed $offset):void{
        unset($this->items[$offset]);
    }
}