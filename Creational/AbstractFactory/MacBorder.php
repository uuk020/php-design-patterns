<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/8
 * Time: 23:17
 */
declare(strict_types = 1);
namespace Patterns\Creational\AbstractFactory;

/**
 * MacOS风格按钮类
 *
 * @package Patterns\Creational\AbstractFactory
 */
class MacBorder implements Border
{
    /**
     * 制造
     *
     * @return string
     */
    public function make(): string
    {
        return "这是Mac风格的边框";
    }
}