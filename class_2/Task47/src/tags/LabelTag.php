<?php

namespace App\tags;


class LabelTag implements TagInterface
{
    private string $labelText;
    private TagInterface $tag;

    public function __construct(string $labelText, TagInterface $tag)
    {
        $this->labelText = $labelText;
        $this->tag = $tag;
    }

    public function render():string
    {
        return "<label>{$this->labelText}" . $this->tag->render() . "</label>";
    }

    public function __toString()
    {
        return $this->render();
    }
}