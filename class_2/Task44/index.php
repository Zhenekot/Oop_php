<?php 

namespace App;
require __DIR__."/vendor/autoload.php";
use App\TicTacToe;
$game = new TicTacToe();
$game->go(2, 2);
        $game->go();
        $game->go(2, 3);
        $game->go();
        $game->go(3, 3);
        $isWinner = $game->go();
var_dump($isWinner);