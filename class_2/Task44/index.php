<?php 

namespace App;
require __DIR__."/vendor/autoload.php";
use App\TicTacToe;
$game = new TicTacToe('normal');
        $game->go();
        $game->go(3, 2);
        $game->go();
        $game->go(2, 1);
        $game->go();
        $game->go(2, 3);
        $isWinner = $game->go();

var_dump($game);