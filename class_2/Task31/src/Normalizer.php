<?php

namespace App\Normalizer;
use Illuminate\Support\Collection;
function normalize(array $city):array{
    $city = collect($city);
    $result = $city->map(fn($item)=> ['country'=>strtolower(trim($item['country'])), 'name' =>strtolower(trim($item['name']))])
    ->sort()->unique('name')
    ->mapToGroups(function (array $item) {
        return [$item['country'] => $item['name']];
    })->toArray();
    return $result;
}
