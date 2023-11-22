<?php 

namespace App;
require __DIR__."/vendor/autoload.php";
use App\ConfigFactory;
use App\Config;

$config = ConfigFactory::build(__DIR__ . '/fixtures/test.yml');
var_dump($config);