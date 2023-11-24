<?php

namespace App\parsers;

use Symfony\Component\Yaml\Yaml;

class YamlParser{
    public function parse($data):array{
        return Yaml::parse(file_get_contents($data), true);;
    }
}