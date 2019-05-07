<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/7
 * Time: 22:35
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\Command;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testBakeMutton()
    {
        $chef = new Receiver();
        $bakeMuttonCommand = new BakeMuttonCommand($chef);
        $waiter = new Invoker();
        $waiter->setCommand($bakeMuttonCommand);
        $this->assertEquals('烤羊肉串', $waiter->notify());
    }

    public function testBakeChickenWing()
    {
        $chef = new Receiver();
        $bakeChickenWingCommand = new BakeChickenWingCommand($chef);
        $waiter = new Invoker();
        $waiter->setCommand($bakeChickenWingCommand);
        $this->assertEquals('烤鸡翅', $waiter->notify());
    }
}
