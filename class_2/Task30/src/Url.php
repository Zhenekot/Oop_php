<?php
namespace App;

class Url
{
    private string $scheme;
    private string $host;
    private string $port;
    private array $param = [];

    public function __construct(private string $url)
    {
        $parseUrl = parse_url($url);
        $this->scheme = isset($parseUrl["scheme"])? $parseUrl["scheme"] : "";
        $this->host =isset($parseUrl["host"])? $parseUrl["host"] : "";
        $this->port = isset($parseUrl["port"])? $parseUrl["port"] : "";

        if(isset($parseUrl["query"])){
            parse_str($parseUrl["query"], $this->param);
        }
    }

    public function getScheme(): string{
        return $this->scheme;
    }
    public function getHostName(): string
    {
        return $this->host;
    }
    public function getPort(): string
    {
        return $this->port;
    }

    public function getQueryParams(): array{
        return $this->param;
    }

    public function getQueryParam(string $paramName, string $returnWord = null): string|null{
        return $this->param[$paramName] ?? $returnWord;
    }

    public function equals(Url $url): bool{
        return $url->getScheme() === $this->getScheme() && $url->getHostName() === $this->getHostName()
        && $url->getPort() === $this->getPort()
        && $this->getQueryParams() === $url->getQueryParams();
    }
}
