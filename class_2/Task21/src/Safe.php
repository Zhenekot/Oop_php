<?php
namespace App\Safe;

function json_decode(string $json, bool $associative = false):array{
    $result= \json_decode($json, $associative);
    if(json_last_error() !== JSON_ERROR_NONE){
        throw new \Exception(json_last_error_msg());
    }
    return $result;
}