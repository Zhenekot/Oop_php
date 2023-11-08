<?php
namespace App;
class Point{
    private float $x;
    private float $y;
    public function __construct(float $x,float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX():float{
        return $this->x;
    }
    public function getY():float{
        return $this->y;
    }
    public function setX(float $x){
        $this->x = $x;
    }
    public function setY(float $y){
        $this->y = $y;
    }
    public function __toString():string{
        $x = $this->getX();
        $y = $this->getY();

        return"($x, $y)";
    }
}
