<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/8
 * Time: 23:18
 */
declare(strict_types = 1);
namespace Patterns\Creational\AbstractFactory;

/**
 * Windows按钮类
 *
 * @package Patterns\Creational\AbstractFactory
 */
class WinButton implements Button
{
    /**
     * 画
     *
     * @return string
     */
    public function draw(): string
    {
        return "这是windows风格的按钮";
    }
}