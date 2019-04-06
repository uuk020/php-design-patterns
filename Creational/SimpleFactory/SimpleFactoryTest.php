<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/6
 * Time: 15:38
 */
declare(strict_types = 1);
namespace Patterns\Creational\SimpleFactory;
use PHPUnit\Framework\TestCase;


class SimpleFactoryTest extends TestCase
{
    public function testCanCreateAdd()
    {
        $add = SimpleFactory::create();
        $this->assertInstanceOf(OperateAdd::class, $add);
    }

    public function testCanCreateSub()
    {
        $sub = SimpleFactory::create('-');
        $this->assertInstanceOf(OperateSub::class, $sub);
    }
}
