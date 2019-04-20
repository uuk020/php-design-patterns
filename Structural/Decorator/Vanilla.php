<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/20
 * Time: 22:45
 */

declare(strict_types = 1);
namespace Patterns\Structural\Decorator;

/**
 * 香草
 * @package Patterns\Structural\Decorator
 */
class Vanilla extends Decorator
{
    /**
     * 加入香草
     *
     * @return string
     */
    public function operation(): string
    {
        return parent::operation() . ', Vanilla';
    }
}