<?php

namespace App\LinkedList;

use App\Node;

function reverse(Node $list):Node{
    $result = null;
    // for($i = 0; $i < count($list); $i++){
    //     $result = new Node($list->getValue(), $result);
    // }
    do{
        $result = new Node($list->getValue(), $result);
    }while(($list = $list->getNext()) !== null);
    return $result;
}