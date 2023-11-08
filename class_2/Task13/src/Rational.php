<?php
namespace App;
class Rational{
    private float $numer;
    private float $denom;
    public function __construct(float $numer, float $denom){
        $this->numer = $numer;
        $this->denom = $denom;
    }

    public function getNumer():float{
        return $this->numer;
    }
    
    public function getDenom():float{
        return $this->denom;
    }

    public function add(Rational $rational):Rational{
        $numer = $this->numer * $rational->getDenom() + $this->denom * $rational->getNumer();
        $denom = $this->denom * $rational->getDenom();

        return new Rational($numer,$denom);
    }

    public function sub(Rational $rational):Rational{
        $numer = $this->numer * $rational->getDenom() - $this->denom * $rational->getNumer();
        $denom = $this->denom * $rational->getDenom();

        return new Rational($numer,$denom);
    }
}