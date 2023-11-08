<?php
namespace App\Converter;
use stdClass;
function toStd(array $array):object {
    $object = new stdClass();
    foreach ($array as $key => $value) {
        $object->$key = $value;
    }
    return $object;
}

