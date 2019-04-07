<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/6
 * Time: 23:51
 */
declare(strict_types = 1);
namespace Patterns\Creational\FactoryMethod;

/**
 * 矩形工厂
 *
 * @package Patterns\Creational\FactoryMethod
 */
class RectangularButtonFactory implements Factory
{
    /**
     * 创建矩形按钮
     *
     * @return \Patterns\Creational\FactoryMethod\Button
     */
    public function createButton(): Button
    {
        return new RectangularButton();
    }
}