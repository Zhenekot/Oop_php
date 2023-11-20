<?php

namespace App\HTML;

function getLinks(array $tags): array
{
    $links = [];
    foreach ($tags as $tag) {
        switch($tag['name']){
            case 'a':
            case 'link':
                $links[] = $tag['href'];
                break;
            case 'img':
                $links[] = $tag['src'];
                break;
        }
        // if (in_array($tag['name'], ['a', 'link'])) {
        //     $links[] = $tag['href'];
        // } elseif ($tag['name'] === 'img') {
        //     $links[] = $tag['src'];
        // }
    }
    return $links;
}