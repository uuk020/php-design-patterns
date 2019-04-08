<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/8
 * Time: 23:04
 */
declare(strict_types = 1);
namespace Patterns\Creational\AbstractFactory;

/**
 * 按钮接口
 *
 * @package Patterns\Creational\FactoryMethod
 */
interface Button
{
    /**
     * 画
     * @return string
     */
    public function draw(): string;
}