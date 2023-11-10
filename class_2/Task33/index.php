<?php 

namespace App;
require __DIR__."/vendor/autoload.php";

use function App\Normalizer\getQuestions;
$text1 = <<<HEREDOC
lala\r\nr
ehu?\t
vie?eii
\n \t
i see you
/r \n
one two?\r\n\n
turum-purum
HEREDOC;
$expected1 = "ehu?\none two?";
var_dump($expected1);
var_dump(getQuestions($text1));
var_dump($expected1 === getQuestions($text1));
