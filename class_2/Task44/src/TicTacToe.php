<?php

namespace App;

use App\strategies\Easy;
use App\strategies\Normal;

class TicTacToe
{
    private array $field;
    private mixed $game;
    public function __construct($level = 'easy')
    {
        $this->field = [
            '1, 1' => 'true',
            '1, 2' => 'true',
            '1, 3' => 'true',
            '2, 1' => 'true',
            '2, 2' => 'true',
            '2, 3' => 'true',
            '3, 1' => 'true',
            '3, 2' => 'true',
            '3, 3' => 'true',

        ];
        $this->game = $level === 'easy' ? new Easy() : new Normal();
    }

    public function winner(string $player):bool{
        if($this->field['1, 1'] === $player && $this->field['2, 2'] === $player && $this->field['3, 3'] === $player){
            return true;
        }
        if($this->field['1, 3'] === $player && $this->field['2, 2'] === $player && $this->field['3, 1'] === $player){
            return true;
        }
        for($i = 1; $i <= 3; $i++){
            if($this->field["{$i}, 1"] === $player && $this->field["{$i}, 2"] === $player && $this->field["{$i}, 3"] === $player){
                return true; 
            }
        }
        for($i = 1; $i <= 3; $i++){
            if($this->field["1, {$i}"] === $player && $this->field["2, {$i}"] === $player && $this->field["3, {$i}"] === $player){
                return true; 
            }
        }
        return false;
    }

    public function go(int $num1 = 0, int $num2 = 0):bool
    {
        if ($num1 === 0 && $num2 === 0) {
            $this->game->move($this->field);
            return $this->winner('O');
        }
        $strStep = "{$num1}, {$num2}";
        if ($this->field[$strStep] === 'true') {
            $this->field[$strStep] = 'X';    
            
        }
        return $this->winner('X');
    }

}
