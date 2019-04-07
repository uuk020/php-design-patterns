<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/6
 * Time: 23:48
 */
declare(strict_types = 1);
namespace Patterns\Creational\FactoryMethod;

/**
 * 圆形按钮
 *
 * @package Patterns\Creational\FactoryMethod
 */
class CircleButton implements Button
{
    /**
     * 画圆形按钮
     *
     * @return string
     */
    public function draw(): string
    {
        return '这是圆形按钮';
    }
}