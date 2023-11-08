<?php 

namespace App;
require __DIR__."/vendor/autoload.php";

use App\User;

$user1 = new User(4, 'tolya');
$user2 = new User(1, 'petya');
 
$user1->compareTo($user2); // false