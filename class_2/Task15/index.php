<?php 

namespace App;
require __DIR__."/vendor/autoload.php";

use App\User;

$user = new User('Ivan');
$address = new User\Address('Russia', 'Moscow', 'Lenina');
$user->addAddress($address);
 
$user2 = new User('Mila');
$user2->addAddress($address);