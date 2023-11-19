<?php

namespace App\HTML;

function getLinks(array $tags): array
{
    $links = [];
    foreach ($tags as $tag) {
        if (in_array($tag['name'], ['a', 'link'])) {
            $links[] = $tag['href'] ?? '';
        } elseif ($tag['name'] === 'img') {
            $links[] = $tag['src'] ?? '';
        }
    }
    return $links;
}