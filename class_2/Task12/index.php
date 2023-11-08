<?php
namespace App;
require __DIR__."/vendor/autoload.php";
use function App\SegmentFunction\reverse;
use App\Point;
use App\Segment;
 
$segment = new Segment(new Point(1, 10), new Point(11, -3));
$reversedSegment = reverse($segment);
 
print_r($reversedSegment->beginPoint); // (11, -3)
print_r('<br/>');
print_r($reversedSegment->endPoint); // (1, 10)