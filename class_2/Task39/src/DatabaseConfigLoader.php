<?php

namespace App;

class DatabaseConfigLoader{
    private string $path;

    public function __construct($path) {
        $this->path = $path;
    }

    public function load(string $env):array {
        $data = file_get_contents($this->path .DIRECTORY_SEPARATOR. "database." . $env . ".json");
        $data = json_decode($data, true);
        if(isset($data['extend'])){
            $data2 = $this->load($data['extend']);
            $mergeData = array_merge($data2, $data);
            unset($mergeData['extend']);
            return $mergeData;
        }
        return $data;
    }
}