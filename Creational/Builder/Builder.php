<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/9
 * Time: 23:20
 */

declare(strict_types = 1);
namespace Patterns\Creational\Builder;

/**
 * 建造者
 * @package Patterns\Creational\Builder
 */
abstract class Builder
{
    /**
     * 套餐类
     *
     * @var \Patterns\Creational\Builder\Meal
     */
    protected $meal;

    /**
     * 创建主食
     *
     * @return mixed
     */
    abstract public function buildFood();

    /**
     * 创建饮料
     *
     * @return mixed
     */
    abstract public function buildDrink();

    /**
     * 获取套餐
     *
     * @return \Patterns\Creational\Builder\Meal
     */
    abstract public function getMeal(): Meal;

    /**
     * 设置套餐类
     *
     * @return mixed
     */
    abstract function setMeal();
}