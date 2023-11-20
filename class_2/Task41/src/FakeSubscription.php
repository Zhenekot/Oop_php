<?php

namespace App;
use App\User;
class FakeSubscription{
    private User $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function hasProfessionalAccess()
    {
        return $this->user->isAdmin();
    }

    public function hasPremiumAccess()
    {
        return $this->user->isAdmin();
    }
}
