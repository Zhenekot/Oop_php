<?php 
namespace App;
use App\Point;
class Segment{
    private Point $beginPoint;
    private Point $endPoint;
    public function __construct(Point $beginPoint, Point $endPoint)
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }

    public function getEndPoint():Point{
        return $this->endPoint;
    }
    public function getBeginPoint():Point{
        return $this->beginPoint;
    }
    public function setEndPoint(Point $endPoint):void{
        $this->endPoint = $endPoint;
    }
    public function setBeginPoint(Point $beginPoint):void{
        $this->beginPoint = $beginPoint;
    }

    public function __toString():string{
        $beginX = $this->getBeginPoint()->getX();
        $beginY = $this->getBeginPoint()->getY();
        $endPointX = $this->getEndPoint()->getX();
        $endPointY = $this->getEndPoint()->getY();
        return"[($beginX, $beginY), ($endPointX, $endPointY)]";
    }
}