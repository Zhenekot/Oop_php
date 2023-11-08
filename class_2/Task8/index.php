<?php

namespace App;
require __DIR__."/vendor/autoload.php";
use function App\PointFunction\getMidpoint;
use App\Point;

$point1 = new Point();
$point1->x = 1;
$point1->y = 10;
$point2 = new Point();
$point2->x = 10;
$point2->y = 1;

$midpoint = getMidpoint($point1, $point2);
print_r("x = $midpoint->x, y =  $midpoint->y");
print_r('<br/>');

$point1->x = 5;
$point1->y = 4;

$point2->x = 7;
$point2->y = 10;

$midpoint = getMidpoint($point1, $point2);
print_r("x = $midpoint->x, y =  $midpoint->y");
print_r('<br/>');

$point1->x = 3;
$point1->y = 2;

$point2->x = 1;
$point2->y = 6;

$midpoint = getMidpoint($point1, $point2);
print_r("x = $midpoint->x, y =  $midpoint->y");
print_r('<br/>');

