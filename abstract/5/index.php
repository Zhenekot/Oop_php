<?php

function makeDecartPoint($x, $y)
{
    return [
        'x' => $x,
        'y' => $y
    ];
}

function getX($point)
{
    return $point['x'];
}

function getY($point)
{
    return $point['y'];
}

function getQuadrant($point)
{
    $x = getX($point);
    $y = getY($point);

    if ($x > 0 && $y > 0) {
        return 1;
    } elseif ($x < 0 && $y > 0) {
        return 2;
    } elseif ($x < 0 && $y < 0) {
        return 3;
    } elseif ($x > 0 && $y < 0) {
        return 4;
    }

    return null;
}

function makeRectangle($startPoint, $width, $height) {
    return[
        'startPoint' => $startPoint,
        'width'=> $width,
        'height'=> $height
    ];
}

function getStartPoint($rectangle){
    return $rectangle['startPoint'];
}

function getWidth($rectangle){
    return $rectangle['width'];
}

function getHeight($rectangle){
    return $rectangle['height'];
}

function containsOrigin($rectangle){
    $topLeft = getStartPoint($rectangle);
    $bottomRight = makeDecartPoint(getX($topLeft) + getWidth($rectangle), getY($topLeft) - getHeight($rectangle));
    $quadrantLeft = getQuadrant($topLeft);
    $quadrantRight = getQuadrant($bottomRight);
    
    return ($quadrantLeft === 2) && ($quadrantRight === 4);
}

$p = makeDecartPoint(0, 1);
$rectangle = makeRectangle($p, 4, 5);
print_r(getStartPoint($rectangle));
print "<br>";
print getWidth($rectangle);
print "<br>";
print getHeight($rectangle);
print "<br>";

$p2 = makeDecartPoint(-4, 3);
$rectangle2 = makeRectangle($p2, 5, 4);
print_r(getStartPoint($rectangle2));
print "<br>";
print getWidth($rectangle2);
print "<br>";
print getHeight($rectangle2);
print "<br>";

$p = makeDecartPoint(0, 1);
$rectangle = makeRectangle($p, 4, 5);
print(containsOrigin($rectangle)?"true":"false");
print "<br>";

$p2 = makeDecartPoint(-4, 3);
$rectangle2 = makeRectangle($p2, 5, 4);
print(containsOrigin($rectangle2)?"true":"false");
print "<br>";

$rectangle3 = makeRectangle($p2, 2, 2);
print(containsOrigin($rectangle3)?"true":"false");
print "<br>";

$rectangle4 = makeRectangle($p2, 5, 2);
print(containsOrigin($rectangle4)?"true":"false");
print "<br>";

$rectangle5 = makeRectangle($p2, 2, 4);
print(containsOrigin($rectangle5)?"true":"false");
print "<br>";

$rectangle6 = makeRectangle($p2, 4, 3);
print(containsOrigin($rectangle6)?"true":"false");