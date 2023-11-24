<?php

namespace App\states;

class Disconnected
{
    private string $status;
    public function __construct()
    {
        $this->status = 'disconnected';
    }
    public function getStatus():string{
        return $this->status;
    }
}
