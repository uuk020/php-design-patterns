<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/8
 * Time: 23:13
 */
declare(strict_types = 1);
namespace Patterns\Creational\AbstractFactory;
/**
 * 边框接口
 *
 * @package Patterns\Creational\AbstractFactory
 */
interface Border
{
    /**
     * 制造
     *
     * @return string
     */
    public function make(): string;
}