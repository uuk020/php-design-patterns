<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/15
 * Time: 23:59
 */

declare(strict_types = 1);
namespace Patterns\Structural\Bridge;

/**
 * 蓝色
 * @package Patterns\Structural\Bridge
 */
class Blue implements Color
{
    /**
     * 获取颜色
     *
     * @return string
     */
    public function getColor(): string
    {
        return '蓝色';
    }
}