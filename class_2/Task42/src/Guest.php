<?php

namespace App;

class Guest
{
    public function getName()
    {
        return 'Guest';
    }

    public function sayHi():string{
        return "Nice to meet you Guest!";
    }
}
