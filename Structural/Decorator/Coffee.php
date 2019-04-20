<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/20
 * Time: 22:32
 */

declare(strict_types = 1);
namespace Patterns\Structural\Decorator;

/**
 * 咖啡
 * @package Patterns\Structural\Decorator
 */
class Coffee implements Component
{
    /**
     * 制作咖啡
     *
     * @return string
     */
    public function operation(): string
    {
        return 'Simple coffee';
    }
}