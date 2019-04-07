<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/6
 * Time: 23:49
 */
declare(strict_types = 1);
namespace Patterns\Creational\FactoryMethod;

/**
 * 矩形按钮
 *
 * @package Patterns\Creational\FactoryMethod
 */
class RectangularButton implements Button
{
    /**
     * 画
     *
     * @return string
     */
    public function draw(): string
    {
        return '这是矩形按钮';
    }
}