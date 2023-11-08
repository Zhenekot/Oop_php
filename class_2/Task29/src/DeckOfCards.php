<?php

namespace App;
use Illuminate\Support\Collection;
class DeckOfCards
{
    private Collection $cards;

    public function __construct(array $ranks)
    {
        $this->cards = collect($ranks)->map(fn ($rank) => collect([$rank, $rank, $rank, $rank]))->flatten();
    }

    public function getShuffled(): array
    {
        return $this->cards->shuffle()->all();
    }
}