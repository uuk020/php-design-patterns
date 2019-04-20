<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/20
 * Time: 22:58
 */

declare(strict_types = 1);
namespace Patterns\Structural\Decorator;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testCanCreateCoffee()
    {
        $coffee = new Coffee();
        $this->assertEquals('Simple coffee', $coffee->operation());
        return $coffee;
    }

    /**
     * @depends testCanCreateCoffee
     * @param \Patterns\Structural\Decorator\Component $coffee
     * @return \Patterns\Structural\Decorator\Milk
     */
    public function testAddMilkToCoffee(Component $coffee)
    {
        $milkCoffee = new Milk();
        $milkCoffee->setComponent($coffee);
        $this->assertEquals('Simple coffee, Milk', $milkCoffee->operation());
        $this->assertEquals('Australia', $milkCoffee->getPlace());
        return $milkCoffee;
    }

    /**
     * @depends testCanCreateCoffee
     * @param \Patterns\Structural\Decorator\Component $coffee
     */
    public function testAddVanillaToCoffee(Component $coffee)
    {
        $vanillaCoffee = new Vanilla();
        $vanillaCoffee->setComponent($coffee);
        $this->assertEquals('Simple coffee, Vanilla', $vanillaCoffee->operation());
    }

    /**
     * @depends testAddMilkToCoffee
     * @param \Patterns\Structural\Decorator\Component $milkCoffee
     */
    public function  testBothCoffee(Component $milkCoffee)
    {
        $vanillaCoffee = new Vanilla();
        $vanillaCoffee->setComponent($milkCoffee);
        $this->assertEquals('Simple coffee, Milk, Vanilla', $vanillaCoffee->operation());
    }
}
