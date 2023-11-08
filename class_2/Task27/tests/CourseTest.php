<?php
// установка
// composer require --dev phpunit/phpunit ^10
// composer update
// запуск
// php ./vendor/bin/phpunit --testdox tests
namespace App\Tests;

use PHPUnit\Framework\TestCase;

use App\Course;

class CourseTest extends TestCase
{
    public function testConverter()
    {
        $course1 = new Course('Din');
        $this->assertEquals('Din', $course1->getName());

        $course1 = new Course('Tom');
        $this->assertEquals('Tom', $course1->getName());

        $course1 = new Course('Bob');
        $this->assertEquals('Bob', $course1->getName());
    }
}

