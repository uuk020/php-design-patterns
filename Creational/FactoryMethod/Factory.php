<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/6
 * Time: 23:45
 */
declare(strict_types = 1);
namespace Patterns\Creational\FactoryMethod;

/**
 * 工厂接口
 * @package Patterns\Creational\FactoryMethod
 */
interface Factory
{
    /**
     * 创建按钮类
     *
     * @return \Patterns\Creational\FactoryMethod\Button
     */
    public function createButton(): Button;
}