<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/8
 * Time: 23:31
 */

declare(strict_types = 1);
namespace Patterns\Creational\AbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateWinProduct()
    {
        $winFactory = new WinFactory();
        $winButton = $winFactory->createButton();
        $winBorder = $winFactory->createBorder();
        $this->assertInstanceOf(WinButton::class, $winButton);
        $this->assertInstanceOf(WinBorder::class, $winBorder);
    }

    public function testCanCreateMacProduct()
    {
        $macFactory = new MacFactory();
        $macButton = $macFactory->createButton();
        $macBorder = $macFactory->createBorder();
        $this->assertInstanceOf(MacButton::class, $macButton);
        $this->assertInstanceOf(MacBorder::class, $macBorder);
    }
}
