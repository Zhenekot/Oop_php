<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Subscription;
use App\User;

class AppTest extends TestCase
{
    public function testSubscriptions()
    {
        $user = new User('vasya@email.com', new Subscription('premium'));
        $result = $user->getCurrentSubscription()->hasPremiumAccess(); // true
        $this->assertTrue($result);
        $result = $user->getCurrentSubscription()->hasProfessionalAccess(); // false
        $this->assertFalse($result);

        $user = new User('vasya@email.com', new Subscription('professional'));
        $result = $user->getCurrentSubscription()->hasPremiumAccess(); // false
        $this->assertFalse($result);
        $result = $user->getCurrentSubscription()->hasProfessionalAccess(); // true
        $this->assertTrue($result);

        $user = new User('vasya@email.com');
        $result = $user->getCurrentSubscription()->hasPremiumAccess(); // false
        $this->assertFalse($result);
        $result = $user->getCurrentSubscription()->hasProfessionalAccess(); // false
        $this->assertFalse($result);

        $user = new User('rakhim@ht.io'); // администратор, проверяется по емейлу
        $result = $user->getCurrentSubscription()->hasPremiumAccess(); // true
        $this->assertTrue($result);
        $result = $user->getCurrentSubscription()->hasProfessionalAccess(); // true
        $this->assertTrue($result);
    }
}
