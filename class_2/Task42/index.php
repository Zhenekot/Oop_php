<?php 

namespace App;
require __DIR__."/vendor/autoload.php";

$user = new User('vasya@email.com');
$result = $user->getCurrentSubscription()->hasPremiumAccess(); // false

var_dump($result);