<?php

namespace App\KeyValueFunctions;
use App\InMemoryKV;
use Illuminate\Support\Collection;
function swapKeyValue(InMemoryKV $data):InMemoryKV{

    $collection = collect($data->toArray())->flip();

    foreach ($data->toArray() as $key => $value){
        $data->unset($key);
    }

    foreach ($collection as $key => $value){
        $data->set($key, $value);
    }
    return $data;
}
