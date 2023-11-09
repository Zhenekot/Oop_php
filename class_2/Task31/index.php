<?php 

namespace App;
require __DIR__."/vendor/autoload.php";

use function App\Normalizer\normalize;
$raw = [
    [
        'name' => 'istambul',
        'country' => 'turkey'
    ],
    [
        'name' => 'Moscow ',
        'country' => ' Russia'
    ],
    [
        'name' => 'iStambul',
        'country' => 'tUrkey'
    ],
    [
        'name' => 'antalia',
        'country' => 'turkeY '
    ],
    [
        'name' => 'samarA',
        'country' => '  ruSsiA'
    ],
    [
        'name' => 'Seattle',
        'country' => 'usa'
    ],
];
normalize($raw);