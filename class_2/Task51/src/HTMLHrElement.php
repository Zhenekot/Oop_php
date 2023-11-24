<?php

namespace App;



class HTMLHrElement extends HTMLElement{
    
    public function __toString(){
        return "<hr{$this->stringifyAttributes()}>";
    }
}
