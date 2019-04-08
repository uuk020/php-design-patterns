<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/8
 * Time: 23:25
 */
declare(strict_types = 1);
namespace Patterns\Creational\AbstractFactory;

/**
 * MacOS工厂
 *
 * @package Patterns\Creational\AbstractFactory
 */
class MacFactory extends AbstractFactory
{
    /**
     * MacOS风格按钮
     *
     * @return \Patterns\Creational\AbstractFactory\Button
     */
    public function createButton(): Button
    {
        return new MacButton();
    }

    /**
     * MacOS风格边框
     *
     * @return \Patterns\Creational\AbstractFactory\Border
     */
    public function createBorder(): Border
    {
        return new MacBorder();
    }
}