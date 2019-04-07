<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/6
 * Time: 23:55
 */
declare(strict_types = 1);
namespace Patterns\Creational\FactoryMethod;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateCircleButton()
    {
        $circleButtonFactory = new CircleButtonFactory();
        $circleButton = $circleButtonFactory->createButton();
        $this->assertInstanceOf(CircleButton::class, $circleButton);
    }

    public function testCanCreateRectangularButton()
    {
        $rectangularButtonFactory = new RectangularButtonFactory();
        $rectangularButton = $rectangularButtonFactory->createButton();
        $this->assertInstanceOf(RectangularButton::class, $rectangularButton);
    }
}
