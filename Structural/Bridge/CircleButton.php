<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/16
 * Time: 0:00
 */

namespace Patterns\Structural\Bridge;

/**
 * 圆形按钮
 * @package Patterns\Structural\Bridge
 */
class CircleButton extends Abstraction
{
    /**
     * @return string
     */
    public function draw(): string
    {
        return $this->color->getColor() . '圆形按钮';
    }
}