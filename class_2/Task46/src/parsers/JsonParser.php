<?php

namespace App\parsers;

class JsonParser{
    
    public function parse($data):array{
        return json_decode(file_get_contents($data), true);
    }
}
