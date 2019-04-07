<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/6
 * Time: 23:50
 */
declare(strict_types = 1);
namespace Patterns\Creational\FactoryMethod;

/**
 * 圆形按钮工厂类
 *
 * @package Patterns\Creational\FactoryMethod
 */
class CircleButtonFactory implements Factory
{
    /**
     * 创建圆形按钮
     *
     * @return \Patterns\Creational\FactoryMethod\Button
     */
    public function createButton(): Button
    {
        return new CircleButton();
    }
}