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
                $pars = new YamlParser($path);
                break;
            case 'json':
                $pars = new JsonParser($path);
                break;
        }
        return new Config($pars->parse());
    }
}
