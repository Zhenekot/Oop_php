<?php

namespace App;

class HTMLElement
{
    private $attributes = [];

    public function __construct($attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function addClass(string $className): void
    {
        $attr = $this->getAtrrToArray();
        if(!in_array($className, $attr)){
            $attr[] = $className;
            $this->setAttrToArray($attr);
        }
    }


    public function removeClass(string $className):void
    {
        $attr = $this->getAtrrToArray();
        $attr = array_diff($attr, [$className]);
        $this->setAttrToArray($attr);
    }

    public function toggleClass(string $className):void
    {
        $attr = $this->getAtrrToArray();
        if(in_array($className, $attr)){
            $this->removeClass($className);
        }else{
            $this->addClass($className);
        }
    }

    public function getAttribute():string
    {
        return $this->attributes['class'];
    }

    private function getAtrrToArray(): array
    {
        return explode(" ", $this->getAttribute());
    }

    private function setAttrToArray(array $classes):void{
        $this->attributes['class'] = implode(" ", $classes);
    }
    protected function stringifyAttributes():string
    {
        return collect($this->attributes)->map(fn($value, $key) =>  " {$key}=\"{$value}\"")->join('');
    }
}
