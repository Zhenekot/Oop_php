<?php


function calculateDistance( $point1, $point2)  {
    $xDistance = $point2[0] - $point1[0];
    $yDistance = $point2[1] - $point1[1];
    $res = sqrt($xDistance ** 2 + $yDistance ** 2);
    return $res;
}
$point1 = [0, 0];
$point2 = [3, 4];
print calculateDistance($point1, $point2);
print "<br>";

$point3 = [-1, -4];
$point4 = [-1, -10];
print calculateDistance($point3, $point4);
print "<br>";

$point3 = [1, 10];
$point4 = [1, 3];
print calculateDistance($point3, $point4);

