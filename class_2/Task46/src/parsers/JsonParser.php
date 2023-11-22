<?php

namespace App\parsers;

class JsonParser{
    private string $path;

    public function __construct(string $path) {
        $this->path = $path;
    }
    public function parse():array{
        $data = file_get_contents($this->path);
        $data = json_decode($data, true);
        return $data;
    }
}
