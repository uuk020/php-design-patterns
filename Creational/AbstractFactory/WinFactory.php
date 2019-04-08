<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/8
 * Time: 23:26
 */

declare(strict_types = 1);
namespace Patterns\Creational\AbstractFactory;

/**
 * Windows工厂
 * @package Patterns\Creational\AbstractFactory
 */
class WinFactory extends AbstractFactory
{
    /**
     * 创建Windows风格按钮
     *
     * @return \Patterns\Creational\AbstractFactory\Button
     */
    public function createButton(): Button
    {
        return new WinButton();
    }

    /**
     * 创建Windows风格边框
     *
     * @return \Patterns\Creational\AbstractFactory\Border
     */
    public function createBorder(): Border
    {
        return new WinBorder();
    }
}