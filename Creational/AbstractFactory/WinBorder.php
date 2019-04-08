<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/8
 * Time: 23:19
 */
declare(strict_types = 1);
namespace Patterns\Creational\AbstractFactory;

/**
 * Windows边框类
 *
 * @package Patterns\Creational\AbstractFactory
 */
class WinBorder implements Border
{
    /**
     * 制造
     *
     * @return string
     */
    public function make(): string
    {
        return "这是Windows风格的边框";
    }
}