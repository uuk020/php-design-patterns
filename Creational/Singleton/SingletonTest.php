<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/11
 * Time: 23:35
 */

declare(strict_types = 1);
namespace Patterns\Creational\Singleton;

use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $first = Singleton::getInstance();
        $second = Singleton::getInstance();
        $this->assertInstanceOf(Singleton::class, $first);
        $this->assertSame($first, $second);
    }
}
