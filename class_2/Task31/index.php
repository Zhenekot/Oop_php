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
print_r(normalize($raw
));
print_r("</br>");
print_r("</br>");
$raw = [
    [
        'name' => 'pariS ',
        'country' => ' france'
    ],
    [
        'name' => ' madrid',
        'country' => ' sPain'
    ],
    [
        'name' => 'valencia',
        'country' => 'spain'
    ],
    [
        'name' => 'marcel',
        'country' => 'france'
    ],
    [
        'name' => ' madrid',
        'country' => ' sPain'
    ],
];

print_r(normalize($raw
));
