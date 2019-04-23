<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/22
 * Time: 23:32
 */

declare(strict_types = 1);
namespace Patterns\Structural\Flyweight;

/**
 * 网站持有人
 * @package Patterns\Structural\Flyweight
 */
class User
{
    /**
     * 网站持有人
     *
     * @var string
     */
    private $name;

    /**
     * User constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 获取持有人名称
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}