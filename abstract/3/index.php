<?php

function makeDecartPoint( $x, $y) {
    return [
        'x' => $x,
        'y' => $y
    ];
}

function getX( $point) {
    return $point['x'];
}

function getY( $point) {
    return $point['y'];
}

function makeSegment( $point1,  $point2) {
    return [
        'beginPoint' => $point1,
        'endPoint' => $point2
    ];
}

function getBeginPoint( $segment) {
    return $segment['beginPoint'];
}

function getEndPoint( $segment) {
    return $segment['endPoint'];
}

function getMidpointOfSegment( $segment) {
    $beginPoint = getBeginPoint($segment);
    $endPoint = getEndPoint($segment);

    $midpointX = (getX($beginPoint) + getX($endPoint)) / 2;
    $midpointY = (getY($beginPoint) + getY($endPoint)) / 2;

    return makeDecartPoint($midpointX, $midpointY);
}



$beginPoint = makeDecartPoint(3, 2);
$endPoint = makeDecartPoint(0, 0);
$segment = makeSegment($beginPoint, $endPoint);
print_r(getBeginPoint($segment));
print "<br>";

print_r(getEndPoint($segment));
print "<br>";

$segment = makeSegment(makeDecartPoint(3, 2), makeDecartPoint(0, 0));
print_r(getMidpointOfSegment($segment));
print "<br>";

$segment2 = makeSegment(makeDecartPoint(3, 2), makeDecartPoint(2, 3));
print_r(getMidpointOfSegment($segment2));