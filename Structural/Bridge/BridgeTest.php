<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/16
 * Time: 21:56
 */
declare(strict_types = 1);
namespace Patterns\Structural\Bridge;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCircleButton()
    {
        $red = new Red();
        $button = new CircleButton();
        $button->setColor($red);
        $this->assertEquals('红色圆形按钮', $button->draw());
        $blue = new Blue;
        $button->setColor($blue);
        $this->assertEquals('蓝色圆形按钮', $button->draw());
    }

    public function testOvalButton()
    {
        $red = new Red();
        $button = new OvalButton();
        $button->setColor($red);
        $this->assertEquals('红色椭圆按钮', $button->draw());
        $blue = new Blue;
        $button->setColor($blue);
        $this->assertEquals('蓝色椭圆按钮', $button->draw());
    }
}
