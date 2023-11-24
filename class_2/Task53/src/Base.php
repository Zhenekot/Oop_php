<?php

namespace App;

class Base
{
    public function isInstanceOf(string $className){
        if(get_class($this) === $className){
            return true;
        }
        return in_array($className, class_parents($this));
    }
}
