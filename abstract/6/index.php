<?php


/* Функция gcd находит наибольший общий делитель двух чисел
 */
function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : abs($b);
}
/* Функция RatToString возвращает строковое представление числа
  (используется для отладки)
*/
function ratToString($rat)
{
    return getNumer($rat) . '/' . getDenom($rat);
}

function makeRational($numer, $denom)
{
    $gcd = gcd($numer, $denom);
    $normNumer = $numer / $gcd;
    $normDenom = $denom / $gcd;
    if ($normDenom < 0) {
        $normNumer = -$normNumer;
        $normDenom = -$normDenom;
    }
    return [
        'numer' => $normNumer,
        'denom'=> $normDenom
    ];
}
function getNumer($rational)
{
    return $rational['numer'];
}
function getDenom($rational)
{
    return $rational['denom'];
}

function add($rational1, $rational2)
{
    $numer = getNumer($rational1) * getDenom($rational2) + getNumer($rational2) * getDenom($rational1);
    $denom = getDenom($rational1) * getDenom($rational2);
    return makeRational($numer, $denom);
}

function sub($rational1, $rational2)
{
    $numer = getNumer($rational1) * getDenom($rational2) - getNumer($rational2) * getDenom($rational1);
    $denom = getDenom($rational1) * getDenom($rational2);
    return makeRational($numer, $denom);
}


$rat1 = makeRational(3, 9);
print ratToString($rat1) . "<br>";
$rat2 = makeRational(10, 3);
print ratToString(add($rat1, $rat2)) . "<br>";
print ratToString(sub($rat1, $rat2)) . "<br>";
$rat3 = makeRational(-4, 16);
print ratToString($rat3) . "<br>";
$rat4 = makeRational(12, 5);
print ratToString(add($rat3, $rat4)) . "<br>";
print ratToString(sub($rat3, $rat4)) . "<br>";
$rat5 = makeRational(3, -9);
print ratToString($rat5) . "<br>";
