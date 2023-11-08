<?php

namespace App;
require __DIR__."/vendor/autoload.php";
use function App\PointFunction\dup;
use App\Point;

$point3 = new Point();

$point3->x = 1;
$point3->y = 6;
$point4 = dup($point3);

print ( ($point3 == $point4 ? "true" : "false"));
print "<br>";
print ( ($point3 === $point4 ? "true" : "false"));
print "<br>";
