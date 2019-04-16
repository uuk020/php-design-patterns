<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/15
 * Time: 23:48
 */

declare(strict_types = 1);
namespace Patterns\Structural\Bridge;


abstract class Abstraction
{
    /**
     * @var \Patterns\Structural\Bridge\Color
     */
    protected $color;

    /**
     * 设置颜色
     *
     * @param \Patterns\Structural\Bridge\Color $color
     */
    public function setColor(Color $color)
    {
        $this->color = $color;
    }

    /**
     * 绘画
     *
     * @return string
     */
    abstract public function draw(): string;
}