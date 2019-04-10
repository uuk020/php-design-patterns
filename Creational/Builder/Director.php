<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/10
 * Time: 0:15
 */

declare(strict_types = 1);
namespace Patterns\Creational\Builder;

/**
 * 指挥者 - KFC服务员
 * @package Patterns\Creational\Builder
 */
class Director
{
    /**
     * 建造者
     *
     * @var \Patterns\Creational\Builder\Builder
     */
    private $mealBuilder;

    /**
     * 构造函数
     *
     * @param \Patterns\Creational\Builder\Builder $builder
     */
    public function __construct(Builder $builder)
    {
        $this->mealBuilder = $builder;
    }

    /**
     * 建造相应套餐
     *
     * @return \Patterns\Creational\Builder\Meal
     */
    public function build(): Meal
    {
        $this->mealBuilder->setMeal();
        $this->mealBuilder->buildDrink();
        $this->mealBuilder->buildFood();
        return $this->mealBuilder->getMeal();
    }
}