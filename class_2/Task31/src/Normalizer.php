<?php

namespace App\Normalizer;
use Illuminate\Support\Collection;
function normalize(array $city){
    $city = collect($city);
    $cmCountry = $city->map(fn($item)=> ['country'=>strtoupper($item['country']), 'name' =>strtoupper($item['name'])]);
    print_r($cmCountry);

}