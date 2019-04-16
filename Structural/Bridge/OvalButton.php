<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/16
 * Time: 0:05
 */

declare(strict_types = 1);
namespace Patterns\Structural\Bridge;

/**
 * 椭圆按钮
 * @package Patterns\Structural\Bridge
 */
class OvalButton extends Abstraction
{
    public function draw(): string
    {
        return $this->color->getColor() . '椭圆按钮';
    }
}