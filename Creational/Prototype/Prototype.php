<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/12
 * Time: 22:59
 */

declare(strict_types = 1);
namespace Patterns\Creational\Prototype;


abstract class Prototype
{
    /**
     * 名称
     *
     * @var string
     */
    private $name;

    /**
     * 设置名字
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * 克隆
     */
    public abstract function __clone();
}