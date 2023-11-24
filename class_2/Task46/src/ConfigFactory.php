<?php

namespace App;

use App\parsers\JsonParser;
use App\parsers\YamlParser;

class ConfigFactory
{

    public static function build($path)
    {
        $pathExctension = pathinfo($path, PATHINFO_EXTENSION);
        switch ($pathExctension) {
            case 'yml':
            case 'yaml':
                $pars = new YamlParser();
                break;
            case 'json':
                $pars = new JsonParser();
                break;
        }
        return new Config($pars->parse($path));
    }
}
