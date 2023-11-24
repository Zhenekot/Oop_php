<?php

namespace App;

class HTMLPairElement extends HTMLElement
{
    public string $textContent = '';
    public function __toString()
    {
        $attrLine = $this->stringifyAttributes();
        $body = $this->getTextContent();

        $tagName = $this->getTagName();
        return "<{$tagName}{$attrLine}>{$body}</{$tagName}>";
    }

    public function getTextContent():string
    {
        return $this->textContent;
    }

    public function setTextContent(string $body):void
    {
        $this->textContent = $body;
    }

}