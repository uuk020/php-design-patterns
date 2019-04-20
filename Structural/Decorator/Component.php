<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/20
 * Time: 22:30
 */

declare(strict_types = 1);
namespace Patterns\Structural\Decorator;

/**
 * 组成接口
 * @package Patterns\Structural\Decorator
 */
interface Component
{
    /**
     * 操作
     *
     * @return mixed
     */
    public function operation();
}