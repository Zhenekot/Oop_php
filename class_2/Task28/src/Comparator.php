<?php
namespace App\Comparator;

function compare(string $seq1, string $seq2): bool{
    return getRealStr($seq1) === getRealStr($seq2);
}


 function getRealStr(string $word): string{

    $stack = new \Ds\Stack();
    $word = ltrim($word,"#");
    for ($i = 0; $i < strlen($word); $i++) {
        if($word[$i] === '#' ){
            $stack->pop(); 
        }else{
            $stack->push($word[$i]);
        }
    }
    return strrev(implode("", $stack->toArray()));
}