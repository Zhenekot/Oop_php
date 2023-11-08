<?php 

namespace App;
require __DIR__."/vendor/autoload.php";

use App\Timer;
$timer1 = new Timer(10);
$timer1->getLeftSeconds(); // 10
$timer1->tick();
$timer1->getLeftSeconds(); // 9
 
$timer2 = new Timer(8, 20, 8);
$timer2->getLeftSeconds(); // 30008