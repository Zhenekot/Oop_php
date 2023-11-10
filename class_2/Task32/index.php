<?php 

namespace App;
require __DIR__."/vendor/autoload.php";

use App\Booking;
$booking = new Booking();
var_dump($booking->book('11-11-2008', '13-11-2008')); // true
var_dump($booking->book('12-11-2008', '12-11-2008')); // false
var_dump($booking->book('10-11-2008', '12-11-2008')); // false
var_dump($booking->book('12-11-2008', '14-11-2008')); // false
var_dump($booking->book('10-11-2008', '11-11-2008')); // true
var_dump($booking->book('13-11-2008', '14-11-2008')); // true
