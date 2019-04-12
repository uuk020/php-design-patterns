<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/12
 * Time: 23:11
 */

declare(strict_types = 1);
namespace Patterns\Creational\Prototype;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testCanDolly()
    {
        $dollyPrototype = new DollyPrototype();
        for ($i = 0; $i < 3; $i++) {
            $dolly = clone $dollyPrototype;
            $dolly->setName('Dolly No ' . $i);
            $this->assertInstanceOf(DollyPrototype::class, $dolly);
        }
    }
}
