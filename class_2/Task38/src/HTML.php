<?php

namespace App\HTML;

function stringify(array $tag): string
{
    $result = "<{$tag['name']}";

    $attributes = collect($tag)
        ->except(['name', 'tagType', 'body'])
        ->map(function ($value, $key) {
            return "{$key}=\"{$value}\"";
        })
        ->implode(' ');

    if (!empty($attributes)) {
        $result .= " {$attributes}";
    }
    
    if ($tag['tagType'] === 'single') {
        $result .= ">";
    } else {
        $result .=  ">{$tag['body']}</{$tag['name']}>";
    }

    return $result;
}