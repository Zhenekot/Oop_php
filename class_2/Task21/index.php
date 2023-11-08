<?php

namespace App;
require __DIR__."/vendor/autoload.php";
use function App\Safe\json_decode;
 
// Второй параметр соответствует второму параметру во встроенной функции json_decode.
// Его нужно передать как есть во внутренний вызов встроенной функции json_decode.
$data = Safe\json_decode('{ "key": "value" }', true);
// ['key' => 'value']
