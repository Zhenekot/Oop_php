<?php

namespace App\Helpers;

function getGreeting(mixed $user):string{
    return $user->sayHi();
}
