<?php 

namespace App;
require __DIR__."/vendor/autoload.php";

$loader = new DatabaseConfigLoader(__DIR__ . '\fixtures');
print_r($loader->load('production'));
print_r('</br>');
print_r($loader->load('custom'));
print_r('</br>');
print_r($loader->load('development'));
print_r('</br>');
$expected = [
    'host' => 'localhost',
    'username' => 'postgres',
    'port' => 5000,
];

print_r($loader->load('development')===$expected);