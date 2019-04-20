<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/20
 * Time: 22:41
 */

declare(strict_types = 1);
namespace Patterns\Structural\Decorator;

/**
 * 牛奶
 * @package Patterns\Structural\Decorator
 */
class Milk extends Decorator
{
    /**
     * 产地
     *
     * @var string
     */
    private $place;

    /**
     * 加入牛奶
     *
     * @return string
     */
    public function operation(): string
    {
        $this->place = 'Australia';
        return parent::operation() . ', Milk';
    }

    /**
     * 获取产地
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }
}