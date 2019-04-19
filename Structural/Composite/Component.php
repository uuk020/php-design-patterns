<?php
/**
 * Created by PhpStorm.
 * User: WytheHuang
 * Date: 2019/4/19
 * Time: 22:08
 */

declare(strict_types = 1);
namespace Patterns\Structural\Composite;

/**
 * 抽象组合对象
 * @package Patterns\Structural\Composite
 */
abstract class Component
{
    /**
     * 名称
     *
     * @var string
     */
    protected $name;

    /**
     * Component constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * 展示
     *
     * @return string
     */
    abstract public function display(): string;

    /**
     * 添加子节点
     *
     * @param string                                   $key
     * @param \Patterns\Structural\Composite\Component $component
     */
    abstract public function add(string $key, Component $component): void;

    /**
     * 移除子节点
     *
     * @param string $key
     */
    abstract public function remove(string $key): void;
}