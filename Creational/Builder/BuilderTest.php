<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/10
 * Time: 0:23
 */

declare(strict_types = 1);
namespace Patterns\Creational\Builder;
use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testMealA()
    {
        $mealABuilder = new SubMealBuilderA();
        $kfcWaiter = new Director($mealABuilder);
        $mealA = $kfcWaiter->build();
        $this->assertInstanceOf(Meal::class, $mealA);
        return $mealA;
    }

    /**
     * @depends testMealA
     * @param \Patterns\Creational\Builder\Meal $mealA
     */
    public function testIsMealA(Meal $mealA)
    {
        $this->assertEquals($mealA->getFood(), '鸡肉卷');
        $this->assertEquals($mealA->getDrink(), '橙汁');
    }

    public function testMealB()
    {
        $mealNBuilder = new SubMealBuilderB();
        $kfcWaiter = new Director($mealNBuilder);
        $mealB = $kfcWaiter->build();
        $this->assertInstanceOf(Meal::class, $mealB);
        return $mealB;
    }

    /**
     * @depends testMealB
     * @param \Patterns\Creational\Builder\Meal $mealB
     */
    public function testIsMealB(Meal $mealB)
    {
        $this->assertEquals($mealB->getFood(), '汉堡');
        $this->assertEquals($mealB->getDrink(), '可口可乐');
    }
}
