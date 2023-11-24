<?php

namespace App;
use App\states\Connected;
use App\states\Disconnected;
use Exception;

class TcpConnection implements TcpConnectionInterface
{
    private $ip;
    private $port;
    private $state;
    private $data;

    public function __construct($ip, $port){
        $this->ip = $ip;
        $this->port = $port;
        $this->state = new Disconnected();
    }

    public function getCurrentState():string{
        return $this->state->getStatus();
    }

    public function connect(){
        if ($this->getCurrentState() === "connected"){
            throw new Exception();
        }
        $this->state = new Connected();
    }

    public function disconnect(){
        if ($this->getCurrentState() === "disconnected"){
            throw new Exception();
        }
        $this->state = new Disconnected();
    }

    public function write($data){
        if ($this->getCurrentState() === "disconnected"){
            throw new Exception();
        }
        $this->data = $data;
    }
}
