<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/10
 * Time: 0:06
 */

declare(strict_types = 1);
namespace Patterns\Creational\Builder;

/**
 * 套餐B建造者
 * @package Patterns\Creational\Builder
 */
class SubMealBuilderB extends Builder
{
    /**
     * 创建套餐B的饮料
     *
     * @return void
     */
    public function buildDrink()
    {
        $this->meal->setDrink('可口可乐');
    }

    /**
     * 创建套餐B的主食
     *
     * @return void
     */
    public function buildFood()
    {
        $this->meal->setFood('汉堡');
    }

    /**
     * 获取套餐
     *
     * @return \Patterns\Creational\Builder\Meal
     */
    public function getMeal(): Meal
    {
        return $this->meal;
    }

    /**
     * 设置套餐
     *
     * @return void
     */
    public function setMeal()
    {
        $this->meal = new Meal();
    }
}