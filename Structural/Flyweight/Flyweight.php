<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/22
 * Time: 23:15
 */

declare(strict_types = 1);
namespace Patterns\Structural\Flyweight;

/**
 * 享元对象接口
 * @package Patterns\Structural\Flyweight
 */
interface Flyweight
{
    /**
     * 展示网站
     *
     * @param \Patterns\Structural\Flyweight\User $user
     * @return string
     */
    public function show(User $user): string;
}