<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/6
 * Time: 15:36
 */
declare(strict_types = 1);
namespace Patterns\Creational\SimpleFactory;

/**
 * 运算类接口
 *
 * @package Patterns\Creational\SimpleFactory
 */
interface Operate
{
    public function calc(): float;
}