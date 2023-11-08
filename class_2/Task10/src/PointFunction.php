<?php

namespace App\PointFunction;
use App\Point;

function dup(Point $point):Point {

    $clone = new Point();
    $clone->x = $point->x;
    $clone->y = $point->y; 
    return $clone;
}

