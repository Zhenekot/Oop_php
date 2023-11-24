<?php

namespace App\states;

class Connected
{
    private string $status;
    public function __construct()
    {
        $this->status = 'connected';
    }
    public function getStatus():string{
        return $this->status;
    }
}
