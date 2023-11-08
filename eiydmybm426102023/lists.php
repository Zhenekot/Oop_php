<?php
require_once('helpers.php');
require_once('classes.php');
require_once('Validator.php');


$list_cd = CDProduct::actionView($pdo);
$list_book = BookProduct::actionView($pdo);

print(include_template('list.php', [ 'list_cd'=> $list_cd, 'list_book'=> $list_book]));




// $nav = include_template('categoriya.php');
// $main = include_template('main.php', [
//     'tour' => $list_tour,
// ]);

// print($layout = include_template('layout.php', [

//     'title' => 'Главная',
//     'nav' => $nav,
//     'main' => $main
// ]));
