<?php

namespace App;

interface KeyValueStorageInterface extends \Serializable{
    public function set($key, $value);
    public function get($key, $default = null);
    public function unset($key);
    public function toArray();
    public function __serialize();
    public function __unserialize($data);
}

