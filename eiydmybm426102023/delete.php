<?php
require_once('helpers.php');
require_once('classes.php');
require_once('Validator.php');
if($_GET['type'] == 'Book'){
    BookProduct::actionDelete($_GET['id'], $pdo);

}elseif($_GET['type'] == 'Cd'){
    CdProduct::actionDelete($_GET['id'], $pdo);
}else{
    print_r('Ошибка');
}
$list_cd = CDProduct::actionView($pdo);
$list_book = BookProduct::actionView($pdo);

print(include_template('list.php', [ 'list_cd'=> $list_cd, 'list_book'=> $list_book]));
