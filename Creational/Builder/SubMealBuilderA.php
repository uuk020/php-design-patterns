<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/9
 * Time: 23:54
 */

declare(strict_types = 1);
namespace Patterns\Creational\Builder;
/**
 * 套餐A建造者
 * @package Patterns\Creational\Builder
 */
class SubMealBuilderA extends Builder
{
    /**
     * 创建套餐A的饮料
     *
     * @return void
     */
    public function buildDrink()
    {
        $this->meal->setDrink('橙汁');
    }

    /**
     * 创建套餐A的主食
     *
     * @return void
     */
    public function buildFood()
    {
        $this->meal->setFood('鸡肉卷');
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