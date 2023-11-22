<?php

namespace App\parsers;

use Symfony\Component\Yaml\Yaml;

class YamlParser{
    private string $path;

    public function __construct(string $path) {
        $this->path = $path;
    }
    public function parse():array{
        $data = file_get_contents($this->path);
        $data = Yaml::parse($data, true);
        return $data;
    }
}