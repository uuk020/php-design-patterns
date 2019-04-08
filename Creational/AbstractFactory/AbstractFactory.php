<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/8
 * Time: 23:06
 */
declare(strict_types = 1);
namespace Patterns\Creational\AbstractFactory;

/**
 * 抽象工厂
 *
 * @package Patterns\Creational\AbstractFactory
 */
abstract class AbstractFactory
{
    /**
     * 创建按钮
     *
     * @return \Patterns\Creational\AbstractFactory\Button
     */
    abstract public function createButton():Button;

    /**
     * 创建边框
     *
     * @return \Patterns\Creational\AbstractFactory\Border
     */
    abstract public function createBorder():Border;
}