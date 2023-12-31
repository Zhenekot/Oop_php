<?php

namespace App\Tests;

use App\InMemoryKV;
use PHPUnit\Framework\TestCase;

class InMemoryKVTest extends TestCase
{
    public function testSetGet()
    {
        $map = new InMemoryKV(['key' => 10]);
        $this->assertNull($map->get('key2'));
        $this->assertEquals('default', $map->get('key2', 'default'));
        $this->assertEquals(10, $map->get('key'));
        $this->assertEquals(10, $map->get('key', 'default'));
        $map->set('key2', 'value2');
        $map->set('key', 'value');
        $this->assertEquals('value2', $map->get('key2', 'default'));
        $this->assertEquals('value2', $map->get('key2'));
        $this->assertEquals('value', $map->get('key'));

        $map->unset('key');
        $this->assertNull($map->get('key'));
        $this->assertEquals(['key2' => 'value2'], $map->toArray());
    }
}
