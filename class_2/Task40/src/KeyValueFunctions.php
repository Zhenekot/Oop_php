<?php

namespace App\KeyValueFunctions;
use App\InMemoryKV;
function swapKeyValue(InMemoryKV $data):InMemoryKV{
    $newData =[];
    foreach ($data->toArray() as $key => $value){
        $newData[$value] = $key;
    }
   
    foreach ($data->toArray() as $key => $value){
        $data->unset($key);
    }

    foreach ($newData as $key => $value){
        $data->set($key, $value);
    }

    return $data;
}
