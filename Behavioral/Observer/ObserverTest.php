<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/22
 * Time: 23:35
 */

namespace Patterns\Behavioral\Observer;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testObserver()
    {
        $computer = new Computer();
        $liSi = new LiSi($computer);
        $xiaoLi = new XiaoLi($computer);
        $computer->attach($liSi);
        $computer->attach($xiaoLi);
        $computer->setPrice(7500)->notify();
        $this->assertEquals('你关注电脑价格: 7500', $liSi->update());
        $this->assertEquals('你关注电脑价格: 7500', $xiaoLi->update());
    }
}
