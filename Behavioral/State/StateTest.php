<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/5/27
 * Time: 23:34
 */

declare(strict_types = 1);
namespace Patterns\Behavioral\State;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testState()
    {
        $getUp = new GetUp();
        $xiaoLi = new Person($getUp);
        $xiaoLi->setHour(9);
        $this->assertEquals('起床', $xiaoLi->request());
        $xiaoLi->setHour(12);
        $this->assertEquals('吃午餐', $xiaoLi->request());
        $xiaoLi->setHour(14);
        $this->assertEquals('学习', $xiaoLi->request());
    }
}
