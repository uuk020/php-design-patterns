<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/8
 * Time: 23:15
 */
declare(strict_types = 1);
namespace Patterns\Creational\AbstractFactory;

/**
 * MacOS按钮类
 *
 * @package Patterns\Creational\AbstractFactory
 */
class MacButton implements Button
{
    /**
     * 画
     *
     * @return string
     */
    public function draw(): string
    {
        return '这是Mac风格的按钮';
    }
}