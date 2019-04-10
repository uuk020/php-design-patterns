<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/9
 * Time: 23:38
 */

declare(strict_types = 1);
namespace Patterns\Creational\Builder;

/**
 * 套餐类
 * @package Patterns\Creational\Builder
 */
class Meal
{
    /**
     * 主食
     *
     * @var string
     */
    private $food;

    /**
     * 饮料
     *
     * @var string
     */
    private $drink;

    /**
     * 设置主食
     *
     * @param string $food
     */
    public function setFood(string $food)
    {
        $this->food = $food;
    }

    /**
     * 获取主食
     *
     * @return string
     */
    public function getFood(): string
    {
        return $this->food;
    }

    /**
     * 设置饮料
     *
     * @param string $drink
     */
    public function setDrink(string $drink)
    {
        $this->drink = $drink;
    }

    /**
     * 获取饮料
     *
     * @return string
     */
    public function getDrink(): string
    {
        return $this->drink;
    }
}