<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/6
 * Time: 23:44
 */
declare(strict_types = 1);
namespace Patterns\Creational\FactoryMethod;

/**
 * 按钮接口
 *
 * @package Patterns\Creational\FactoryMethod
 */
interface Button
{
    /**
     * 画按钮
     * @return string
     */
    public function draw(): string;
}