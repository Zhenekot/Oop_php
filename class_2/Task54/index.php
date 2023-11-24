<?php 

namespace App;
require __DIR__."/vendor/autoload.php";
use App\HTMLDivElement;

$div = new HTMLDivElement(['class' => 'w-75', 'id' => 'wop']);
var_dump($div::attributes);
$expected = '<div class="w-75" id="wop"></div>';






